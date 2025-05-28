@extends('layouts.app')

@section('title', 'Customer Details')

@section('content')
<div class="bg-dark-bg-secondary rounded-lg shadow-lg p-6">
    <div class="flex items-center justify-between mb-6">
        <h2 class="text-2xl font-bold text-dark-text-primary">Customer Details</h2>
        <div class="flex space-x-2">
            <a href="/" class="px-4 py-2 text-sm font-medium text-dark-text-secondary hover:text-dark-text-primary transition-colors">
                Back to Home
            </a>
        </div>
    </div>

    <div class="space-y-6">
        <div class="bg-dark-bg-primary rounded-lg p-4 border border-dark-border">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium text-dark-text-secondary mb-1">Customer ID</label>
                    <div class="text-lg font-medium text-dark-text-primary">{{ $customerId }}</div>
                </div>
                <div>
                    <label class="block text-sm font-medium text-dark-text-secondary mb-1">Name</label>
                    <div class="text-lg font-medium text-dark-text-primary">{{ $customerName }}</div>
                </div>
                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-dark-text-secondary mb-1">Address</label>
                    <div class="text-lg font-medium text-dark-text-primary">{{ $customerAddress }}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection