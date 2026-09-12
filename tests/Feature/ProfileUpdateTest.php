<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProfileUpdateTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_can_save_and_update_personal_information(): void
    {
        $admin = User::factory()->create([
            'phone' => '0500000000',
            'address' => 'الرياض',
        ]);

        $this->actingAs($admin)->put(route('profile.update'), [
            'name' => 'المدير العام',
            'national_id' => '1234567890',
            'phone' => '0555555555',
            'date_of_birth' => now()->subYears(16)->subDay()->format('Y-m-d'),
            'address' => 'جدة',
            'bio' => 'هذه نبذة تعريفية صحيحة تحتوي على أكثر من عشرين حرفاً.',
        ])->assertRedirect(route('profile.show'));

        $this->assertDatabaseHas('users', [
            'id' => $admin->id,
            'name' => 'المدير العام',
            'national_id' => '1234567890',
            'phone' => '0555555555',
            'address' => 'جدة',
        ]);

        $this->actingAs($admin)->put(route('profile.update'), [
            'name' => 'المدير المحدث',
            'national_id' => '0987654321',
            'phone' => '0566666666',
            'date_of_birth' => now()->subYears(20)->format('Y-m-d'),
            'address' => 'الدمام',
            'bio' => 'هذه نبذة محدثة تحتوي على أكثر من عشرين حرفاً.',
        ])->assertRedirect(route('profile.show'));

        $this->assertDatabaseHas('users', [
            'id' => $admin->id,
            'name' => 'المدير المحدث',
            'national_id' => '0987654321',
            'phone' => '0566666666',
            'address' => 'الدمام',
        ]);
    }

    public function test_personal_information_rules_reject_invalid_values(): void
    {
        $admin = User::factory()->create([
            'phone' => '0500000000',
            'address' => 'الرياض',
        ]);

        $response = $this->actingAs($admin)->from(route('profile.show'))->put(route('profile.update'), [
            'name' => '',
            'national_id' => '12345abc678',
            'phone' => '123456789',
            'date_of_birth' => now()->subYears(15)->format('Y-m-d'),
            'address' => '',
            'bio' => 'نبذة قصيرة',
        ]);

        $response->assertRedirect(route('profile.show'))
            ->assertSessionHasErrors([
                'name',
                'national_id',
                'phone',
                'date_of_birth',
                'address',
                'bio',
            ]);
    }

    public function test_required_personal_information_cannot_be_missing(): void
    {
        $admin = User::factory()->create([
            'phone' => '0500000000',
            'address' => 'الرياض',
        ]);

        $this->actingAs($admin)
            ->put(route('profile.update'), [])
            ->assertSessionHasErrors(['name', 'national_id', 'phone', 'date_of_birth', 'address', 'bio']);
    }
}
