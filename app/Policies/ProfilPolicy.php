<?php

namespace App\Policies;

use App\Models\Profil;
use App\Models\User;

class ProfilPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        // Logika otorisasi untuk melihat semua profil
        return true;  // Misalnya, semua pengguna bisa melihat profil
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Profil $profil): bool
    {
        // Logika otorisasi untuk melihat profil tertentu
        return $user->id === $profil->user_id;  // Misalnya, hanya pemilik profil yang dapat melihatnya
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        // Logika otorisasi untuk membuat profil baru
        return true;  // Semua pengguna diizinkan untuk membuat profil
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Profil $profil): bool
    {
        // Logika otorisasi untuk memperbarui profil
        return true; // Hanya pemilik profil yang bisa memperbarui profilnya
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Profil $profil): bool
    {
        // Logika otorisasi untuk menghapus profil
        return true;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Profil $profil): bool
    {
        // Logika otorisasi untuk memulihkan profil
        return true; // Hanya pemilik profil yang bisa memulihkannya
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Profil $profil): bool
    {
        // Logika otorisasi untuk menghapus profil secara permanen
        return true; // Hanya pemilik profil yang bisa menghapusnya secara permanen
    }
}
