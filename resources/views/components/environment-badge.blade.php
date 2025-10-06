@if ($enabled)
    <style>
        .environment-badge {
            border-radius: 5px 0 0 5px;
            overflow: hidden;
            position: fixed;
            bottom: 30px;
            right: 0;
            margin-left: 15px;
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
            transform: translateX(calc(100% - 55px));
            transition: transform 0.5s ease-out;
            z-index: 999;
        }
        .environment-badge.environment-badge--open {
            transform: translateX(0);
        }
        .environment-badge:not(.environment-badge--open) .environment-badge__icon {
            cursor: pointer;
        }
        .environment-badge__icon {
            height: 25px;
            width: 25px;
            fill: white;
            margin-right: 15px;
            margin-left: 3px;
        }
        .environment-badge__content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #1a418b;
            padding: 15px 10px;
            border-left: 5px solid #ede9e3;
            backface-visibility: hidden;
        }
        .environment-badge__info p,
        .environment-badge__info a {
            color: white;
            margin: 0;
            font-size: 16px;
        }
        .environment-badge__subtitle span,
        .environment-badge__subtitle a {
            color: #bec2d3;
            transition: color 0.3s ease-out;
            font-size: 14px;
        }
        .environment-badge__subtitle a:hover {
            color: white;
        }
        .environment-badge__close {
            cursor: pointer;
        }
        .environment-badge__close svg {
            fill: white;
            width: 10px;
            height: 10px;
            margin: 0 10px 0 23px;
            opacity: 0.6;
            transition: opacity 0.3s ease-out;
        }
        .environment-badge__close:hover svg {
            opacity: 1;
        }
    </style>

    <div class="environment-badge | js-environment-badge">
        <div class="environment-badge__content">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 86.7 66.7" class="environment-badge__icon | js-environment-badge-open" style="enable-background:new 0 0 86.7 66.7" xml:space="preserve"><path d="M85.1 31.9c-26.6.2-37.9-15.3-40.4-30.2-.2-1.5-2.4-1.5-2.7 0v.1C39.4 16.6 28.1 32 1.7 31.9h-.1c-1.7.2-1.7 2.8 0 2.8 26.6-.2 37.9 15.2 40.4 30.2.2 1.5 2.4 1.5 2.7 0v-.1c2.6-14.9 13.9-30.3 40.4-30.1 1.7 0 1.7-2.6 0-2.8" style="fill:#ffffff"/></svg>
            <div class="environment-badge__info">
                <p class="environment-badge__title">{{ __('environment-badge::environment-badge.title') }}</p>
                <p class="environment-badge__subtitle">
                    <span>{!! __('environment-badge::environment-badge.subtitle') !!}</span>
                </p>
            </div>
            <div class="environment-badge__close | js-environment-badge-close">
                <svg viewBox="0 0 329.26933 329" xmlns="http://www.w3.org/2000/svg" class="environment-badge__close">
                    <path d="m194.800781 164.769531 128.210938-128.214843c8.34375-8.339844 8.34375-21.824219 0-30.164063-8.339844-8.339844-21.824219-8.339844-30.164063 0l-128.214844 128.214844-128.210937-128.214844c-8.34375-8.339844-21.824219-8.339844-30.164063 0-8.34375 8.339844-8.34375 21.824219 0 30.164063l128.210938 128.214843-128.210938 128.214844c-8.34375 8.339844-8.34375 21.824219 0 30.164063 4.15625 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921875-2.089844 15.082031-6.25l128.210937-128.214844 128.214844 128.214844c4.160156 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921874-2.089844 15.082031-6.25 8.34375-8.339844 8.34375-21.824219 0-30.164063zm0 0" />
                </svg>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        window.onload = function () {
            var badge = document.querySelector(".js-environment-badge");
            var openBtn = document.querySelector(".js-environment-badge-open");
            var closeBtn = document.querySelector(".js-environment-badge-close");

            badge.classList.add('environment-badge--open');

            openBtn.addEventListener('click', function (e) {
                if (! badge.classList.contains('environment-badge--open')){
                    badge.classList.add('environment-badge--open');
                }
            });

            closeBtn.addEventListener('click', function (e) {
                badge.classList.remove('environment-badge--open');
            });
        }
    </script>
@endif
