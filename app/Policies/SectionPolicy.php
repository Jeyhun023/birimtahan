<?php

namespace App\Policies;

use App\Models\Exam;
use App\Models\Section;
use App\Models\User;

class SectionPolicy
{
    /**
     * Determine whether the user can create models.
     */
    public function create(User $user, Exam $exam): bool
    {
        return $exam->user_id === $user->id;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Section $section): bool
    {
        return $section->exam->user_id === $user->id;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Section $section): bool
    {
        return $section->exam->user_id === $user->id;
    }
}