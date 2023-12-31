<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\Invoice\TransactionController;
use App\Http\Controllers\Registration\FruitItemController;
use App\Http\Controllers\Registration\FruitCategoryController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
        ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
        ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
        ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
        ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
        ->name('password.update');
});

Route::middleware('auth')->group(function () {
    Route::get('invoice/{id}/print', [TransactionController::class, 'printPdf'])
    ->name('invoice.print');

    Route::get('invoice/display', [TransactionController::class, 'index'])
        ->name('invoice.display');
    Route::get('invoice', [TransactionController::class, 'create'])
        ->name('invoice');
    Route::post('invoice', [TransactionController::class, 'store'])
        ->name('invoice.store');
    Route::get('invoice/{id}/edit', [TransactionController::class, 'edit'])
        ->name('invoice.edit');
    Route::get('invoice/{id}/delete', [TransactionController::class, 'delete'])
        ->name('invoice.delete');
    Route::get('invoice/{id}/delete-transaction/{transaction_id}', [TransactionController::class, 'deleteTransaction'])
        ->name('invoice.delete.transaction');
    Route::post('invoice/{id}/edit', [TransactionController::class, 'update'])
        ->name('invoice.update');

    Route::get('fruit-item', [FruitItemController::class, 'create'])
        ->name('item');
    Route::post('fruit-item', [FruitItemController::class, 'store'])
        ->name('item.store');
    Route::get('fruit-item/{id}/edit', [FruitItemController::class, 'edit'])
        ->name('item.edit');
    Route::get('fruit-item/{id}/delete', [FruitItemController::class, 'delete'])
        ->name('item.delete');
    Route::post('fruit-item/{id}/update', [FruitItemController::class, 'update'])
        ->name('item.update');

    Route::get('fruit-category', [FruitCategoryController::class, 'create'])
        ->name('category');
    Route::post('fruit-category', [FruitCategoryController::class, 'store'])->name("category.store");
    Route::get('fruit-category/{id}/edit', [FruitCategoryController::class, 'edit'])
        ->name('category.edit');
    Route::get('fruit-category/{id}/delete', [FruitCategoryController::class, 'delete'])
        ->name('category.delete');
    Route::post('fruit-category/{id}/update', [FruitCategoryController::class, 'update'])
        ->name('category.update');

    Route::get('verify-email', [EmailVerificationPromptController::class, '__invoke'])
        ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
        ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
});
