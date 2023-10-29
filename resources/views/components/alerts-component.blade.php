<div class="container-alert">
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">
                {{ $error }}
                <div class="close" id="close-alert" onclick="this.parentElement.remove()">
                    <svg width="30" height="30" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.00009 11.9997L12.0001 5.99966" stroke="#5d6672" stroke-width="1.2"/>
                        <path d="M12 12L6 6" stroke="#5d6672" stroke-width="1.2"/>
                    </svg>
                </div>
            </div>
        @endforeach
    @endif

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
            <div class="close" onclick="this.parentElement.remove()">
                <svg width="30" height="30" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.00009 11.9997L12.0001 5.99966" stroke="#5d6672" stroke-width="1.2"/>
                    <path d="M12 12L6 6" stroke="#5d6672" stroke-width="1.2"/>
                </svg>
            </div>
        </div>
    @endif
</div>
