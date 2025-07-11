<?php

namespace App\Traits;

trait ToastsMessages
{
    /**
     * Flashes a message to the session to be displayed by SweetAlert.
     *
     * @param string $model   The name of the affected model or entity (e.g., 'User', 'Product').
     * @param string $request The identifier of the specific request or item (e.g., 'New user', 'Order #123').
     * @param string $message The action message describing what happened (e.g., 'It was created successfully.').
     * @return void
     */
    private function message(string $model, string $request, string $message): void
    {
        session()->flash('swal', [
            'icon' => 'success', // Defines the alert icon (e.g., 'success', 'error', 'warning', 'info', 'question').
            'title' => __('Done'), // Main title of the alert, translatable.
            'text' => $model . ': ' . $request . ' ' . $message // Body of the message, concatenating the model, request, and action message.
        ]);
    }

    public function errorMessage(string $message): void
    {
        session()->flash('swal', [
            'icon' => 'error',
            'title' => __('Error'),
            'text' => $message
        ]);
    }

    public function warningMessage(string $message): void
    {
        session()->flash('swal', [
            'icon' => 'warning',
            'title' => __('Warning'),
            'text' => $message
        ]);
    }

    /**
     * Generates a success message for a creation operation.
     *
     * @param string $model   The name of the created model.
     * @param string $request The identifier of the created item.
     * @return void
     */
    public function createdMessage(string $model, string $request): void
    {
        $this->message($model, $request, __('It was created successfully.'));
    }

    /**
     * Generates a success message for an update operation.
     *
     * @param string $model   The name of the updated model.
     * @param string $request The identifier of the updated item.
     * @return void
     */
    public function updatedMessage(string $model, string $request): void
    {
        $this->message($model, $request, __('It was updated successfully.'));
    }

    /**
     * Generates a success message for a deletion operation.
     *
     * @param string $model   The name of the deleted model.
     * @param string $request The identifier of the deleted item.
     * @return void
     */
    public function deletedMessage(string $model, string $request): void
    {
        $this->message($model, $request, __('It was deleted successfully.'));
    }
}
