<?php

namespace App\Http\Requests\Api\Sections;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class AbstractRequest
 *
 * @package App\Http\Requests\Api\Sections
 */
abstract class AbstractRequest extends FormRequest
{
    abstract public function authorize(): bool;

    abstract public function rules(): array;
}
