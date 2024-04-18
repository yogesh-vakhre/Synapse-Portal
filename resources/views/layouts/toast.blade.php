<div class="row">
    <div class="col-12">
        <div aria-live="polite" aria-atomic="true" class="position-relative">
            <div class="toast-container top-0 end-0 p-3 ">
                @if ($message = session('success'))
                    <div class="toast w-100 align-items-center text-bg-success show border-0" role="alert"
                        aria-live="assertive" aria-atomic="true" data-bs-autohide="false">
                        <div class="d-flex">
                            <div class="toast-body">
                                {{ $message }}!
                                <button type="button" class="btn-close btn-close-white me-2 m-auto"
                                    data-bs-dismiss="toast" aria-label="Close"></button>
                            </div>
                        </div>
                    </div>
                @endif

                @if ($message = session('error'))
                    <div class="toast w-100 align-items-center text-bg-danger border-0 show" role="alert"
                        aria-live="assertive" aria-atomic="true" data-bs-autohide="false">
                        <div class="d-flex">
                            <div class="toast-body">
                                {{ $message }}!
                                <button type="button" class="btn-close btn-close-white me-2 m-auto"
                                    data-bs-dismiss="toast" aria-label="Close"></button>
                            </div>
                        </div>
                    </div>
                @endif

                @if ($message = session('warning'))
                    <div class="toast w-100 align-items-center text-bg-warning border-0 show" role="alert"
                        aria-live="assertive" aria-atomic="true" data-bs-autohide="false">
                        <div class="d-flex">
                            <div class="toast-body">
                                {{ $message }}!
                                <button type="button" class="btn-close btn-close-white me-2 m-auto"
                                    data-bs-dismiss="toast" aria-label="Close"></button>
                            </div>
                        </div>
                    </div>
                @endif

                @if ($message = session('info'))
                    <div class="toast w-100 align-items-center text-bg-info border-0 show" role="alert"
                        aria-live="assertive" aria-atomic="true" data-bs-autohide="false">
                        <div class="d-flex">
                            <div class="toast-body">
                                {{ $message }}!
                                <button type="button" class="btn-close btn-close-white me-2 m-auto"
                                    data-bs-dismiss="toast" aria-label="Close"></button>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
