<?php

declare(strict_types=1);

namespace Honed\Lock\Tests\Stubs;

use Illuminate\Foundation\Auth\User;

class ProductPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Product $product): bool
    {
        return $product->id % 2 === 0;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Product $product): bool
    {
        return $product->id % 2 !== 0;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Product $product): bool
    {
        return $product->id % 2 === 0;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Product $product): bool
    {
        return $product->id % 2 !== 0;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    protected function forceDelete(User $user, Product $product): bool
    {
        return $product->id % 2 === 0;
    }
}
