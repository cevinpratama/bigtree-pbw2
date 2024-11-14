<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-primary rounded-5 fw-bold']) }}>
    {{ $slot }}
</button>
