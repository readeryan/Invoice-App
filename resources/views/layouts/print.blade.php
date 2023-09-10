<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Invoice</title>
        <style>
            /*
! tailwindcss v3.3.3 | MIT License | https://tailwindcss.com
*/ /*
1. Prevent padding and border from affecting element width. (https://github.com/mozdevs/cssremedy/issues/4)
2. Allow adding a border to an element by just adding a border-width. (https://github.com/tailwindcss/tailwindcss/pull/116)
*/

            *,
            ::before,
            ::after {
                box-sizing: border-box; /* 1 */
                border-width: 0; /* 2 */
                border-style: solid; /* 2 */
                border-color: #e5e7eb; /* 2 */
            }

            ::before,
            ::after {
                --tw-content: "";
            }

            /*
1. Use a consistent sensible line-height in all browsers.
2. Prevent adjustments of font size after orientation changes in iOS.
3. Use a more readable tab size.
4. Use the user's configured `sans` font-family by default.
5. Use the user's configured `sans` font-feature-settings by default.
6. Use the user's configured `sans` font-variation-settings by default.
*/

            html {
                line-height: 1.5; /* 1 */
                -webkit-text-size-adjust: 100%; /* 2 */
                -moz-tab-size: 4; /* 3 */
                -o-tab-size: 4;
                tab-size: 4; /* 3 */
                font-family: Nunito, ui-sans-serif, system-ui, -apple-system,
                    BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue",
                    Arial, "Noto Sans", sans-serif, "Apple Color Emoji",
                    "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"; /* 4 */
                font-feature-settings: normal; /* 5 */
                font-variation-settings: normal; /* 6 */
            }

            /*
1. Remove the margin in all browsers.
2. Inherit line-height from `html` so users can set them as a class directly on the `html` element.
*/

            body {
                margin: 0; /* 1 */
                line-height: inherit; /* 2 */
            }

            /*
1. Add the correct height in Firefox.
2. Correct the inheritance of border color in Firefox. (https://bugzilla.mozilla.org/show_bug.cgi?id=190655)
3. Ensure horizontal rules are visible by default.
*/

            hr {
                height: 0; /* 1 */
                color: inherit; /* 2 */
                border-top-width: 1px; /* 3 */
            }

            /*
Add the correct text decoration in Chrome, Edge, and Safari.
*/

            abbr:where([title]) {
                -webkit-text-decoration: underline dotted;
                text-decoration: underline dotted;
            }

            /*
Remove the default font size and weight for headings.
*/

            h1,
            h2,
            h3,
            h4,
            h5,
            h6 {
                font-size: inherit;
                font-weight: inherit;
            }

            /*
Reset links to optimize for opt-in styling instead of opt-out.
*/

            a {
                color: inherit;
                text-decoration: inherit;
            }

            /*
Add the correct font weight in Edge and Safari.
*/

            b,
            strong {
                font-weight: bolder;
            }

            /*
1. Use the user's configured `mono` font family by default.
2. Correct the odd `em` font sizing in all browsers.
*/

            code,
            kbd,
            samp,
            pre {
                font-family: ui-monospace, SFMono-Regular, Menlo, Monaco,
                    Consolas, "Liberation Mono", "Courier New", monospace; /* 1 */
                font-size: 1em; /* 2 */
            }

            /*
Add the correct font size in all browsers.
*/

            small {
                font-size: 80%;
            }

            /*
Prevent `sub` and `sup` elements from affecting the line height in all browsers.
*/

            sub,
            sup {
                font-size: 75%;
                line-height: 0;
                position: relative;
                vertical-align: baseline;
            }

            sub {
                bottom: -0.25em;
            }

            sup {
                top: -0.5em;
            }

            /*
1. Remove text indentation from table contents in Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=999088, https://bugs.webkit.org/show_bug.cgi?id=201297)
2. Correct table border color inheritance in all Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=935729, https://bugs.webkit.org/show_bug.cgi?id=195016)
3. Remove gaps between table borders by default.
*/

            table {
                text-indent: 0; /* 1 */
                border-color: inherit; /* 2 */
                border-collapse: collapse; /* 3 */
            }

            /*
1. Change the font styles in all browsers.
2. Remove the margin in Firefox and Safari.
3. Remove default padding in all browsers.
*/

            button,
            input,
            optgroup,
            select,
            textarea {
                font-family: inherit; /* 1 */
                font-feature-settings: inherit; /* 1 */
                font-variation-settings: inherit; /* 1 */
                font-size: 100%; /* 1 */
                font-weight: inherit; /* 1 */
                line-height: inherit; /* 1 */
                color: inherit; /* 1 */
                margin: 0; /* 2 */
                padding: 0; /* 3 */
            }

            /*
Remove the inheritance of text transform in Edge and Firefox.
*/

            button,
            select {
                text-transform: none;
            }

            /*
1. Correct the inability to style clickable types in iOS and Safari.
2. Remove default button styles.
*/

            button,
            [type="button"],
            [type="reset"],
            [type="submit"] {
                -webkit-appearance: button; /* 1 */
                background-color: transparent; /* 2 */
                background-image: none; /* 2 */
            }

            /*
Use the modern Firefox focus style for all focusable elements.
*/

            :-moz-focusring {
                outline: auto;
            }

            /*
Remove the additional `:invalid` styles in Firefox. (https://github.com/mozilla/gecko-dev/blob/2f9eacd9d3d995c937b4251a5557d95d494c9be1/layout/style/res/forms.css#L728-L737)
*/

            :-moz-ui-invalid {
                box-shadow: none;
            }

            /*
Add the correct vertical alignment in Chrome and Firefox.
*/

            progress {
                vertical-align: baseline;
            }

            /*
Correct the cursor style of increment and decrement buttons in Safari.
*/

            ::-webkit-inner-spin-button,
            ::-webkit-outer-spin-button {
                height: auto;
            }

            /*
1. Correct the odd appearance in Chrome and Safari.
2. Correct the outline style in Safari.
*/

            [type="search"] {
                -webkit-appearance: textfield; /* 1 */
                outline-offset: -2px; /* 2 */
            }

            /*
Remove the inner padding in Chrome and Safari on macOS.
*/

            ::-webkit-search-decoration {
                -webkit-appearance: none;
            }

            /*
1. Correct the inability to style clickable types in iOS and Safari.
2. Change font properties to `inherit` in Safari.
*/

            ::-webkit-file-upload-button {
                -webkit-appearance: button; /* 1 */
                font: inherit; /* 2 */
            }

            /*
Add the correct display in Chrome and Safari.
*/

            summary {
                display: list-item;
            }

            /*
Removes the default spacing and border for appropriate elements.
*/

            blockquote,
            dl,
            dd,
            h1,
            h2,
            h3,
            h4,
            h5,
            h6,
            hr,
            figure,
            p,
            pre {
                margin: 0;
            }

            fieldset {
                margin: 0;
                padding: 0;
            }

            legend {
                padding: 0;
            }

            ol,
            ul,
            menu {
                list-style: none;
                margin: 0;
                padding: 0;
            }

            /*
Reset default styling for dialogs.
*/
            dialog {
                padding: 0;
            }

            /*
Prevent resizing textareas horizontally by default.
*/

            textarea {
                resize: vertical;
            }

            /*
1. Reset the default placeholder opacity in Firefox. (https://github.com/tailwindlabs/tailwindcss/issues/3300)
2. Set the default placeholder color to the user's configured gray 400 color.
*/

            input::-moz-placeholder,
            textarea::-moz-placeholder {
                opacity: 1; /* 1 */
                color: #9ca3af; /* 2 */
            }

            input::placeholder,
            textarea::placeholder {
                opacity: 1; /* 1 */
                color: #9ca3af; /* 2 */
            }

            /*
Set the default cursor for buttons.
*/

            button,
            [role="button"] {
                cursor: pointer;
            }

            /*
Make sure disabled buttons don't get the pointer cursor.
*/
            :disabled {
                cursor: default;
            }

            /*
1. Make replaced elements `display: block` by default. (https://github.com/mozdevs/cssremedy/issues/14)
2. Add `vertical-align: middle` to align replaced elements more sensibly by default. (https://github.com/jensimmons/cssremedy/issues/14#issuecomment-634934210)
   This can trigger a poorly considered lint error in some tools but is included by design.
*/

            img,
            svg,
            video,
            canvas,
            audio,
            iframe,
            embed,
            object {
                display: block; /* 1 */
                vertical-align: middle; /* 2 */
            }

            /*
Constrain images and videos to the parent width and preserve their intrinsic aspect ratio. (https://github.com/mozdevs/cssremedy/issues/14)
*/

            img,
            video {
                max-width: 100%;
                height: auto;
            }

            /* Make elements with the HTML hidden attribute stay hidden by default */
            [hidden] {
                display: none;
            }

            [type="text"],
            input:where(:not([type])),
            [type="email"],
            [type="url"],
            [type="password"],
            [type="number"],
            [type="date"],
            [type="datetime-local"],
            [type="month"],
            [type="search"],
            [type="tel"],
            [type="time"],
            [type="week"],
            [multiple],
            textarea,
            select {
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
                background-color: #fff;
                border-color: #6b7280;
                border-width: 1px;
                border-radius: 0px;
                padding-top: 0.5rem;
                padding-right: 0.75rem;
                padding-bottom: 0.5rem;
                padding-left: 0.75rem;
                font-size: 1rem;
                line-height: 1.5rem;
                --tw-shadow: 0 0 #0000;
            }

            [type="text"]:focus,
            input:where(:not([type])):focus,
            [type="email"]:focus,
            [type="url"]:focus,
            [type="password"]:focus,
            [type="number"]:focus,
            [type="date"]:focus,
            [type="datetime-local"]:focus,
            [type="month"]:focus,
            [type="search"]:focus,
            [type="tel"]:focus,
            [type="time"]:focus,
            [type="week"]:focus,
            [multiple]:focus,
            textarea:focus,
            select:focus {
                outline: 2px solid transparent;
                outline-offset: 2px;
                --tw-ring-inset: var(--tw-empty, /*!*/ /*!*/);
                --tw-ring-offset-width: 0px;
                --tw-ring-offset-color: #fff;
                --tw-ring-color: #2563eb;
                --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0
                    var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                --tw-ring-shadow: var(--tw-ring-inset) 0 0 0
                    calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow),
                    var(--tw-shadow);
                border-color: #2563eb;
            }

            input::-moz-placeholder,
            textarea::-moz-placeholder {
                color: #6b7280;
                opacity: 1;
            }

            input::placeholder,
            textarea::placeholder {
                color: #6b7280;
                opacity: 1;
            }

            ::-webkit-datetime-edit-fields-wrapper {
                padding: 0;
            }

            ::-webkit-date-and-time-value {
                min-height: 1.5em;
                text-align: inherit;
            }

            ::-webkit-datetime-edit {
                display: inline-flex;
            }

            ::-webkit-datetime-edit,
            ::-webkit-datetime-edit-year-field,
            ::-webkit-datetime-edit-month-field,
            ::-webkit-datetime-edit-day-field,
            ::-webkit-datetime-edit-hour-field,
            ::-webkit-datetime-edit-minute-field,
            ::-webkit-datetime-edit-second-field,
            ::-webkit-datetime-edit-millisecond-field,
            ::-webkit-datetime-edit-meridiem-field {
                padding-top: 0;
                padding-bottom: 0;
            }

            select {
                background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e");
                background-position: right 0.5rem center;
                background-repeat: no-repeat;
                background-size: 1.5em 1.5em;
                padding-right: 2.5rem;
                -webkit-print-color-adjust: exact;
                print-color-adjust: exact;
            }

            [multiple],
            [size]:where(select:not([size="1"])) {
                background-image: initial;
                background-position: initial;
                background-repeat: unset;
                background-size: initial;
                padding-right: 0.75rem;
                -webkit-print-color-adjust: unset;
                print-color-adjust: unset;
            }

            [type="checkbox"],
            [type="radio"] {
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
                padding: 0;
                -webkit-print-color-adjust: exact;
                print-color-adjust: exact;
                display: inline-block;
                vertical-align: middle;
                background-origin: border-box;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
                flex-shrink: 0;
                height: 1rem;
                width: 1rem;
                color: #2563eb;
                background-color: #fff;
                border-color: #6b7280;
                border-width: 1px;
                --tw-shadow: 0 0 #0000;
            }

            [type="checkbox"] {
                border-radius: 0px;
            }

            [type="radio"] {
                border-radius: 100%;
            }

            [type="checkbox"]:focus,
            [type="radio"]:focus {
                outline: 2px solid transparent;
                outline-offset: 2px;
                --tw-ring-inset: var(--tw-empty, /*!*/ /*!*/);
                --tw-ring-offset-width: 2px;
                --tw-ring-offset-color: #fff;
                --tw-ring-color: #2563eb;
                --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0
                    var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                --tw-ring-shadow: var(--tw-ring-inset) 0 0 0
                    calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow),
                    var(--tw-shadow);
            }

            [type="checkbox"]:checked,
            [type="radio"]:checked {
                border-color: transparent;
                background-color: currentColor;
                background-size: 100% 100%;
                background-position: center;
                background-repeat: no-repeat;
            }

            [type="checkbox"]:checked {
                background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M12.207 4.793a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0l-2-2a1 1 0 011.414-1.414L6.5 9.086l4.293-4.293a1 1 0 011.414 0z'/%3e%3c/svg%3e");
            }

            [type="radio"]:checked {
                background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3ccircle cx='8' cy='8' r='3'/%3e%3c/svg%3e");
            }

            [type="checkbox"]:checked:hover,
            [type="checkbox"]:checked:focus,
            [type="radio"]:checked:hover,
            [type="radio"]:checked:focus {
                border-color: transparent;
                background-color: currentColor;
            }

            [type="checkbox"]:indeterminate {
                background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 16 16'%3e%3cpath stroke='white' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M4 8h8'/%3e%3c/svg%3e");
                border-color: transparent;
                background-color: currentColor;
                background-size: 100% 100%;
                background-position: center;
                background-repeat: no-repeat;
            }

            [type="checkbox"]:indeterminate:hover,
            [type="checkbox"]:indeterminate:focus {
                border-color: transparent;
                background-color: currentColor;
            }

            [type="file"] {
                background: unset;
                border-color: inherit;
                border-width: 0;
                border-radius: 0;
                padding: 0;
                font-size: unset;
                line-height: inherit;
            }

            [type="file"]:focus {
                outline: 1px solid ButtonText;
                outline: 1px auto -webkit-focus-ring-color;
            }

            *,
            ::before,
            ::after {
                --tw-border-spacing-x: 0;
                --tw-border-spacing-y: 0;
                --tw-translate-x: 0;
                --tw-translate-y: 0;
                --tw-rotate: 0;
                --tw-skew-x: 0;
                --tw-skew-y: 0;
                --tw-scale-x: 1;
                --tw-scale-y: 1;
                --tw-pan-x: ;
                --tw-pan-y: ;
                --tw-pinch-zoom: ;
                --tw-scroll-snap-strictness: proximity;
                --tw-gradient-from-position: ;
                --tw-gradient-via-position: ;
                --tw-gradient-to-position: ;
                --tw-ordinal: ;
                --tw-slashed-zero: ;
                --tw-numeric-figure: ;
                --tw-numeric-spacing: ;
                --tw-numeric-fraction: ;
                --tw-ring-inset: ;
                --tw-ring-offset-width: 0px;
                --tw-ring-offset-color: #fff;
                --tw-ring-color: rgb(59 130 246 / 0.5);
                --tw-ring-offset-shadow: 0 0 #0000;
                --tw-ring-shadow: 0 0 #0000;
                --tw-shadow: 0 0 #0000;
                --tw-shadow-colored: 0 0 #0000;
                --tw-blur: ;
                --tw-brightness: ;
                --tw-contrast: ;
                --tw-grayscale: ;
                --tw-hue-rotate: ;
                --tw-invert: ;
                --tw-saturate: ;
                --tw-sepia: ;
                --tw-drop-shadow: ;
                --tw-backdrop-blur: ;
                --tw-backdrop-brightness: ;
                --tw-backdrop-contrast: ;
                --tw-backdrop-grayscale: ;
                --tw-backdrop-hue-rotate: ;
                --tw-backdrop-invert: ;
                --tw-backdrop-opacity: ;
                --tw-backdrop-saturate: ;
                --tw-backdrop-sepia: ;
            }

            ::backdrop {
                --tw-border-spacing-x: 0;
                --tw-border-spacing-y: 0;
                --tw-translate-x: 0;
                --tw-translate-y: 0;
                --tw-rotate: 0;
                --tw-skew-x: 0;
                --tw-skew-y: 0;
                --tw-scale-x: 1;
                --tw-scale-y: 1;
                --tw-pan-x: ;
                --tw-pan-y: ;
                --tw-pinch-zoom: ;
                --tw-scroll-snap-strictness: proximity;
                --tw-gradient-from-position: ;
                --tw-gradient-via-position: ;
                --tw-gradient-to-position: ;
                --tw-ordinal: ;
                --tw-slashed-zero: ;
                --tw-numeric-figure: ;
                --tw-numeric-spacing: ;
                --tw-numeric-fraction: ;
                --tw-ring-inset: ;
                --tw-ring-offset-width: 0px;
                --tw-ring-offset-color: #fff;
                --tw-ring-color: rgb(59 130 246 / 0.5);
                --tw-ring-offset-shadow: 0 0 #0000;
                --tw-ring-shadow: 0 0 #0000;
                --tw-shadow: 0 0 #0000;
                --tw-shadow-colored: 0 0 #0000;
                --tw-blur: ;
                --tw-brightness: ;
                --tw-contrast: ;
                --tw-grayscale: ;
                --tw-hue-rotate: ;
                --tw-invert: ;
                --tw-saturate: ;
                --tw-sepia: ;
                --tw-drop-shadow: ;
                --tw-backdrop-blur: ;
                --tw-backdrop-brightness: ;
                --tw-backdrop-contrast: ;
                --tw-backdrop-grayscale: ;
                --tw-backdrop-hue-rotate: ;
                --tw-backdrop-invert: ;
                --tw-backdrop-opacity: ;
                --tw-backdrop-saturate: ;
                --tw-backdrop-sepia: ;
            }
            .prose {
                color: var(--tw-prose-body);
                max-width: 65ch;
            }
            .prose
                :where(p):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                ) {
                margin-top: 1.25em;
                margin-bottom: 1.25em;
            }
            .prose
                :where([class~="lead"]):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                ) {
                color: var(--tw-prose-lead);
                font-size: 1.25em;
                line-height: 1.6;
                margin-top: 1.2em;
                margin-bottom: 1.2em;
            }
            .prose
                :where(a):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                ) {
                color: var(--tw-prose-links);
                text-decoration: underline;
                font-weight: 500;
            }
            .prose
                :where(strong):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                ) {
                color: var(--tw-prose-bold);
                font-weight: 600;
            }
            .prose
                :where(a strong):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                ) {
                color: inherit;
            }
            .prose
                :where(blockquote strong):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                ) {
                color: inherit;
            }
            .prose
                :where(thead th strong):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                ) {
                color: inherit;
            }
            .prose
                :where(ol):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                ) {
                list-style-type: decimal;
                margin-top: 1.25em;
                margin-bottom: 1.25em;
                padding-left: 1.625em;
            }
            .prose
                :where(ol[type="A"]):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                ) {
                list-style-type: upper-alpha;
            }
            .prose
                :where(ol[type="a"]):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                ) {
                list-style-type: lower-alpha;
            }
            .prose
                :where(ol[type="A" s]):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                ) {
                list-style-type: upper-alpha;
            }
            .prose
                :where(ol[type="a" s]):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                ) {
                list-style-type: lower-alpha;
            }
            .prose
                :where(ol[type="I"]):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                ) {
                list-style-type: upper-roman;
            }
            .prose
                :where(ol[type="i"]):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                ) {
                list-style-type: lower-roman;
            }
            .prose
                :where(ol[type="I" s]):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                ) {
                list-style-type: upper-roman;
            }
            .prose
                :where(ol[type="i" s]):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                ) {
                list-style-type: lower-roman;
            }
            .prose
                :where(ol[type="1"]):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                ) {
                list-style-type: decimal;
            }
            .prose
                :where(ul):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                ) {
                list-style-type: disc;
                margin-top: 1.25em;
                margin-bottom: 1.25em;
                padding-left: 1.625em;
            }
            .prose
                :where(ol > li):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                )::marker {
                font-weight: 400;
                color: var(--tw-prose-counters);
            }
            .prose
                :where(ul > li):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                )::marker {
                color: var(--tw-prose-bullets);
            }
            .prose
                :where(dt):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                ) {
                color: var(--tw-prose-headings);
                font-weight: 600;
                margin-top: 1.25em;
            }
            .prose
                :where(hr):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                ) {
                border-color: var(--tw-prose-hr);
                border-top-width: 1px;
                margin-top: 3em;
                margin-bottom: 3em;
            }
            .prose
                :where(blockquote):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                ) {
                font-weight: 500;
                font-style: italic;
                color: var(--tw-prose-quotes);
                border-left-width: 0.25rem;
                border-left-color: var(--tw-prose-quote-borders);
                quotes: "\201C""\201D""\2018""\2019";
                margin-top: 1.6em;
                margin-bottom: 1.6em;
                padding-left: 1em;
            }
            .prose
                :where(blockquote p:first-of-type):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                )::before {
                content: open-quote;
            }
            .prose
                :where(blockquote p:last-of-type):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                )::after {
                content: close-quote;
            }
            .prose
                :where(h1):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                ) {
                color: var(--tw-prose-headings);
                font-weight: 800;
                font-size: 2.25em;
                margin-top: 0;
                margin-bottom: 0.8888889em;
                line-height: 1.1111111;
            }
            .prose
                :where(h1 strong):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                ) {
                font-weight: 900;
                color: inherit;
            }
            .prose
                :where(h2):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                ) {
                color: var(--tw-prose-headings);
                font-weight: 700;
                font-size: 1.5em;
                margin-top: 2em;
                margin-bottom: 1em;
                line-height: 1.3333333;
            }
            .prose
                :where(h2 strong):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                ) {
                font-weight: 800;
                color: inherit;
            }
            .prose
                :where(h3):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                ) {
                color: var(--tw-prose-headings);
                font-weight: 600;
                font-size: 1.25em;
                margin-top: 1.6em;
                margin-bottom: 0.6em;
                line-height: 1.6;
            }
            .prose
                :where(h3 strong):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                ) {
                font-weight: 700;
                color: inherit;
            }
            .prose
                :where(h4):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                ) {
                color: var(--tw-prose-headings);
                font-weight: 600;
                margin-top: 1.5em;
                margin-bottom: 0.5em;
                line-height: 1.5;
            }
            .prose
                :where(h4 strong):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                ) {
                font-weight: 700;
                color: inherit;
            }
            .prose
                :where(img):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                ) {
                margin-top: 2em;
                margin-bottom: 2em;
            }
            .prose
                :where(picture):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                ) {
                display: block;
                margin-top: 2em;
                margin-bottom: 2em;
            }
            .prose
                :where(kbd):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                ) {
                font-weight: 500;
                font-family: inherit;
                color: var(--tw-prose-kbd);
                box-shadow: 0 0 0 1px rgb(var(--tw-prose-kbd-shadows) / 10%),
                    0 3px 0 rgb(var(--tw-prose-kbd-shadows) / 10%);
                font-size: 0.875em;
                border-radius: 0.3125rem;
                padding-top: 0.1875em;
                padding-right: 0.375em;
                padding-bottom: 0.1875em;
                padding-left: 0.375em;
            }
            .prose
                :where(code):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                ) {
                color: var(--tw-prose-code);
                font-weight: 600;
                font-size: 0.875em;
            }
            .prose
                :where(code):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                )::before {
                content: "`";
            }
            .prose
                :where(code):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                )::after {
                content: "`";
            }
            .prose
                :where(a code):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                ) {
                color: inherit;
            }
            .prose
                :where(h1 code):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                ) {
                color: inherit;
            }
            .prose
                :where(h2 code):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                ) {
                color: inherit;
                font-size: 0.875em;
            }
            .prose
                :where(h3 code):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                ) {
                color: inherit;
                font-size: 0.9em;
            }
            .prose
                :where(h4 code):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                ) {
                color: inherit;
            }
            .prose
                :where(blockquote code):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                ) {
                color: inherit;
            }
            .prose
                :where(thead th code):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                ) {
                color: inherit;
            }
            .prose
                :where(pre):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                ) {
                color: var(--tw-prose-pre-code);
                background-color: var(--tw-prose-pre-bg);
                overflow-x: auto;
                font-weight: 400;
                font-size: 0.875em;
                line-height: 1.7142857;
                margin-top: 1.7142857em;
                margin-bottom: 1.7142857em;
                border-radius: 0.375rem;
                padding-top: 0.8571429em;
                padding-right: 1.1428571em;
                padding-bottom: 0.8571429em;
                padding-left: 1.1428571em;
            }
            .prose
                :where(pre code):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                ) {
                background-color: transparent;
                border-width: 0;
                border-radius: 0;
                padding: 0;
                font-weight: inherit;
                color: inherit;
                font-size: inherit;
                font-family: inherit;
                line-height: inherit;
            }
            .prose
                :where(pre code):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                )::before {
                content: none;
            }
            .prose
                :where(pre code):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                )::after {
                content: none;
            }
            .prose
                :where(table):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                ) {
                width: 100%;
                table-layout: auto;
                text-align: left;
                margin-top: 2em;
                margin-bottom: 2em;
                font-size: 0.875em;
                line-height: 1.7142857;
            }
            .prose
                :where(thead):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                ) {
                border-bottom-width: 1px;
                border-bottom-color: var(--tw-prose-th-borders);
            }
            .prose
                :where(thead th):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                ) {
                color: var(--tw-prose-headings);
                font-weight: 600;
                vertical-align: bottom;
                padding-right: 0.5714286em;
                padding-bottom: 0.5714286em;
                padding-left: 0.5714286em;
            }
            .prose
                :where(tbody tr):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                ) {
                border-bottom-width: 1px;
                border-bottom-color: var(--tw-prose-td-borders);
            }
            .prose
                :where(tbody tr:last-child):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                ) {
                border-bottom-width: 0;
            }
            .prose
                :where(tbody td):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                ) {
                vertical-align: baseline;
            }
            .prose
                :where(tfoot):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                ) {
                border-top-width: 1px;
                border-top-color: var(--tw-prose-th-borders);
            }
            .prose
                :where(tfoot td):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                ) {
                vertical-align: top;
            }
            .prose
                :where(figure > *):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                ) {
                margin-top: 0;
                margin-bottom: 0;
            }
            .prose
                :where(figcaption):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                ) {
                color: var(--tw-prose-captions);
                font-size: 0.875em;
                line-height: 1.4285714;
                margin-top: 0.8571429em;
            }
            .prose {
                --tw-prose-body: #374151;
                --tw-prose-headings: #111827;
                --tw-prose-lead: #4b5563;
                --tw-prose-links: #111827;
                --tw-prose-bold: #111827;
                --tw-prose-counters: #6b7280;
                --tw-prose-bullets: #d1d5db;
                --tw-prose-hr: #e5e7eb;
                --tw-prose-quotes: #111827;
                --tw-prose-quote-borders: #e5e7eb;
                --tw-prose-captions: #6b7280;
                --tw-prose-kbd: #111827;
                --tw-prose-kbd-shadows: 17 24 39;
                --tw-prose-code: #111827;
                --tw-prose-pre-code: #e5e7eb;
                --tw-prose-pre-bg: #1f2937;
                --tw-prose-th-borders: #d1d5db;
                --tw-prose-td-borders: #e5e7eb;
                --tw-prose-invert-body: #d1d5db;
                --tw-prose-invert-headings: #fff;
                --tw-prose-invert-lead: #9ca3af;
                --tw-prose-invert-links: #fff;
                --tw-prose-invert-bold: #fff;
                --tw-prose-invert-counters: #9ca3af;
                --tw-prose-invert-bullets: #4b5563;
                --tw-prose-invert-hr: #374151;
                --tw-prose-invert-quotes: #f3f4f6;
                --tw-prose-invert-quote-borders: #374151;
                --tw-prose-invert-captions: #9ca3af;
                --tw-prose-invert-kbd: #fff;
                --tw-prose-invert-kbd-shadows: 255 255 255;
                --tw-prose-invert-code: #fff;
                --tw-prose-invert-pre-code: #d1d5db;
                --tw-prose-invert-pre-bg: rgb(0 0 0 / 50%);
                --tw-prose-invert-th-borders: #4b5563;
                --tw-prose-invert-td-borders: #374151;
                font-size: 1rem;
                line-height: 1.75;
            }
            .prose
                :where(picture > img):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                ) {
                margin-top: 0;
                margin-bottom: 0;
            }
            .prose
                :where(video):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                ) {
                margin-top: 2em;
                margin-bottom: 2em;
            }
            .prose
                :where(li):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                ) {
                margin-top: 0.5em;
                margin-bottom: 0.5em;
            }
            .prose
                :where(ol > li):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                ) {
                padding-left: 0.375em;
            }
            .prose
                :where(ul > li):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                ) {
                padding-left: 0.375em;
            }
            .prose
                :where(.prose > ul > li p):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                ) {
                margin-top: 0.75em;
                margin-bottom: 0.75em;
            }
            .prose
                :where(.prose > ul > li > *:first-child):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                ) {
                margin-top: 1.25em;
            }
            .prose
                :where(.prose > ul > li > *:last-child):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                ) {
                margin-bottom: 1.25em;
            }
            .prose
                :where(.prose > ol > li > *:first-child):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                ) {
                margin-top: 1.25em;
            }
            .prose
                :where(.prose > ol > li > *:last-child):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                ) {
                margin-bottom: 1.25em;
            }
            .prose
                :where(ul ul, ul ol, ol ul, ol ol):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                ) {
                margin-top: 0.75em;
                margin-bottom: 0.75em;
            }
            .prose
                :where(dl):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                ) {
                margin-top: 1.25em;
                margin-bottom: 1.25em;
            }
            .prose
                :where(dd):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                ) {
                margin-top: 0.5em;
                padding-left: 1.625em;
            }
            .prose
                :where(hr + *):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                ) {
                margin-top: 0;
            }
            .prose
                :where(h2 + *):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                ) {
                margin-top: 0;
            }
            .prose
                :where(h3 + *):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                ) {
                margin-top: 0;
            }
            .prose
                :where(h4 + *):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                ) {
                margin-top: 0;
            }
            .prose
                :where(thead th:first-child):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                ) {
                padding-left: 0;
            }
            .prose
                :where(thead th:last-child):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                ) {
                padding-right: 0;
            }
            .prose
                :where(tbody td, tfoot td):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                ) {
                padding-top: 0.5714286em;
                padding-right: 0.5714286em;
                padding-bottom: 0.5714286em;
                padding-left: 0.5714286em;
            }
            .prose
                :where(tbody td:first-child, tfoot td:first-child):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                ) {
                padding-left: 0;
            }
            .prose
                :where(tbody td:last-child, tfoot td:last-child):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                ) {
                padding-right: 0;
            }
            .prose
                :where(figure):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                ) {
                margin-top: 2em;
                margin-bottom: 2em;
            }
            .prose
                :where(.prose > :first-child):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                ) {
                margin-top: 0;
            }
            .prose
                :where(.prose > :last-child):not(
                    :where([class~="not-prose"], [class~="not-prose"] *)
                ) {
                margin-bottom: 0;
            }
            .pointer-events-none {
                pointer-events: none;
            }
            .pointer-events-auto {
                pointer-events: auto;
            }
            .fixed {
                position: fixed;
            }
            .absolute {
                position: absolute;
            }
            .relative {
                position: relative;
            }
            .inset-0 {
                inset: 0px;
            }
            .left-0 {
                left: 0px;
            }
            .right-0 {
                right: 0px;
            }
            .top-0 {
                top: 0px;
            }
            .z-0 {
                z-index: 0;
            }
            .z-50 {
                z-index: 50;
            }
            .z-10 {
                z-index: 10;
            }
            .col-span-4 {
                grid-column: span 4 / span 4;
            }
            .col-span-5 {
                grid-column: span 5 / span 5;
            }
            .col-span-6 {
                grid-column: span 6 / span 6;
            }
            .col-span-2 {
                grid-column: span 2 / span 2;
            }
            .col-span-1 {
                grid-column: span 1 / span 1;
            }
            .col-span-3 {
                grid-column: span 3 / span 3;
            }
            .mx-auto {
                margin-left: auto;
                margin-right: auto;
            }
            .-ml-px {
                margin-left: -1px;
            }
            .-mr-0 {
                margin-right: -0px;
            }
            .-mr-0\.5 {
                margin-right: -0.125rem;
            }
            .-mr-1 {
                margin-right: -0.25rem;
            }
            .-mr-2 {
                margin-right: -0.5rem;
            }
            .-mt-px {
                margin-top: -1px;
            }
            .mb-4 {
                margin-bottom: 1rem;
            }
            .mb-6 {
                margin-bottom: 1.5rem;
            }
            .ml-1 {
                margin-left: 0.25rem;
            }
            .ml-12 {
                margin-left: 3rem;
            }
            .ml-2 {
                margin-left: 0.5rem;
            }
            .ml-3 {
                margin-left: 0.75rem;
            }
            .ml-4 {
                margin-left: 1rem;
            }
            .ml-6 {
                margin-left: 1.5rem;
            }
            .mr-2 {
                margin-right: 0.5rem;
            }
            .mr-3 {
                margin-right: 0.75rem;
            }
            .mt-1 {
                margin-top: 0.25rem;
            }
            .mt-10 {
                margin-top: 2.5rem;
            }
            .mt-2 {
                margin-top: 0.5rem;
            }
            .mt-3 {
                margin-top: 0.75rem;
            }
            .mt-4 {
                margin-top: 1rem;
            }
            .mt-5 {
                margin-top: 1.25rem;
            }
            .mt-6 {
                margin-top: 1.5rem;
            }
            .mt-8 {
                margin-top: 2rem;
            }
            .mb-2 {
                margin-bottom: 0.5rem;
            }
            .block {
                display: block;
            }
            .inline {
                display: inline;
            }
            .flex {
                display: flex;
            }
            .inline-flex {
                display: inline-flex;
            }
            .table {
                display: table;
            }
            .grid {
                display: grid;
            }
            .hidden {
                display: none;
            }
            .h-10 {
                height: 2.5rem;
            }
            .h-12 {
                height: 3rem;
            }
            .h-16 {
                height: 4rem;
            }
            .h-20 {
                height: 5rem;
            }
            .h-4 {
                height: 1rem;
            }
            .h-5 {
                height: 1.25rem;
            }
            .h-6 {
                height: 1.5rem;
            }
            .h-8 {
                height: 2rem;
            }
            .h-9 {
                height: 2.25rem;
            }
            .h-40 {
                height: 10rem;
            }
            .min-h-screen {
                min-height: 100vh;
            }
            .w-0 {
                width: 0px;
            }
            .w-1\/2 {
                width: 50%;
            }
            .w-10 {
                width: 2.5rem;
            }
            .w-12 {
                width: 3rem;
            }
            .w-16 {
                width: 4rem;
            }
            .w-20 {
                width: 5rem;
            }
            .w-3\/4 {
                width: 75%;
            }
            .w-4 {
                width: 1rem;
            }
            .w-48 {
                width: 12rem;
            }
            .w-5 {
                width: 1.25rem;
            }
            .w-6 {
                width: 1.5rem;
            }
            .w-60 {
                width: 15rem;
            }
            .w-8 {
                width: 2rem;
            }
            .w-auto {
                width: auto;
            }
            .w-full {
                width: 100%;
            }
            .min-w-0 {
                min-width: 0px;
            }
            .max-w-6xl {
                max-width: 72rem;
            }
            .max-w-7xl {
                max-width: 80rem;
            }
            .max-w-screen-xl {
                max-width: 1280px;
            }
            .max-w-xl {
                max-width: 36rem;
            }
            .max-w-sm {
                max-width: 24rem;
            }
            .max-w-md {
                max-width: 28rem;
            }
            .flex-1 {
                flex: 1 1 0%;
            }
            .flex-shrink-0 {
                flex-shrink: 0;
            }
            .shrink-0 {
                flex-shrink: 0;
            }
            .border-collapse {
                border-collapse: collapse;
            }
            .origin-top {
                transform-origin: top;
            }
            .origin-top-left {
                transform-origin: top left;
            }
            .origin-top-right {
                transform-origin: top right;
            }
            .translate-y-0 {
                --tw-translate-y: 0px;
                transform: translate(
                        var(--tw-translate-x),
                        var(--tw-translate-y)
                    )
                    rotate(var(--tw-rotate)) skewX(var(--tw-skew-x))
                    skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x))
                    scaleY(var(--tw-scale-y));
            }
            .translate-y-4 {
                --tw-translate-y: 1rem;
                transform: translate(
                        var(--tw-translate-x),
                        var(--tw-translate-y)
                    )
                    rotate(var(--tw-rotate)) skewX(var(--tw-skew-x))
                    skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x))
                    scaleY(var(--tw-scale-y));
            }
            .translate-y-2 {
                --tw-translate-y: 0.5rem;
                transform: translate(
                        var(--tw-translate-x),
                        var(--tw-translate-y)
                    )
                    rotate(var(--tw-rotate)) skewX(var(--tw-skew-x))
                    skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x))
                    scaleY(var(--tw-scale-y));
            }
            .scale-100 {
                --tw-scale-x: 1;
                --tw-scale-y: 1;
                transform: translate(
                        var(--tw-translate-x),
                        var(--tw-translate-y)
                    )
                    rotate(var(--tw-rotate)) skewX(var(--tw-skew-x))
                    skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x))
                    scaleY(var(--tw-scale-y));
            }
            .scale-95 {
                --tw-scale-x: 0.95;
                --tw-scale-y: 0.95;
                transform: translate(
                        var(--tw-translate-x),
                        var(--tw-translate-y)
                    )
                    rotate(var(--tw-rotate)) skewX(var(--tw-skew-x))
                    skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x))
                    scaleY(var(--tw-scale-y));
            }
            .transform {
                transform: translate(
                        var(--tw-translate-x),
                        var(--tw-translate-y)
                    )
                    rotate(var(--tw-rotate)) skewX(var(--tw-skew-x))
                    skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x))
                    scaleY(var(--tw-scale-y));
            }
            .cursor-default {
                cursor: default;
            }
            .cursor-pointer {
                cursor: pointer;
            }
            .list-inside {
                list-style-position: inside;
            }
            .list-disc {
                list-style-type: disc;
            }
            .grid-cols-1 {
                grid-template-columns: repeat(1, minmax(0, 1fr));
            }
            .grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
            .grid-cols-4 {
                grid-template-columns: repeat(4, minmax(0, 1fr));
            }
            .grid-cols-6 {
                grid-template-columns: repeat(6, minmax(0, 1fr));
            }
            .grid-cols-8 {
                grid-template-columns: repeat(8, minmax(0, 1fr));
            }
            .grid-cols-7 {
                grid-template-columns: repeat(7, minmax(0, 1fr));
            }
            .grid-cols-5 {
                grid-template-columns: repeat(5, minmax(0, 1fr));
            }
            .grid-cols-12 {
                grid-template-columns: repeat(12, minmax(0, 1fr));
            }
            .grid-cols-3 {
                grid-template-columns: repeat(3, minmax(0, 1fr));
            }
            .flex-row {
                flex-direction: row;
            }
            .flex-col {
                flex-direction: column;
            }
            .flex-wrap {
                flex-wrap: wrap;
            }
            .content-center {
                align-content: center;
            }
            .items-start {
                align-items: flex-start;
            }
            .items-end {
                align-items: flex-end;
            }
            .items-center {
                align-items: center;
            }
            .justify-end {
                justify-content: flex-end;
            }
            .justify-center {
                justify-content: center;
            }
            .justify-between {
                justify-content: space-between;
            }
            .gap-1 {
                gap: 0.25rem;
            }
            .gap-2 {
                gap: 0.5rem;
            }
            .gap-4 {
                gap: 1rem;
            }
            .gap-6 {
                gap: 1.5rem;
            }
            .space-x-8 > :not([hidden]) ~ :not([hidden]) {
                --tw-space-x-reverse: 0;
                margin-right: calc(2rem * var(--tw-space-x-reverse));
                margin-left: calc(2rem * calc(1 - var(--tw-space-x-reverse)));
            }
            .space-y-1 > :not([hidden]) ~ :not([hidden]) {
                --tw-space-y-reverse: 0;
                margin-top: calc(0.25rem * calc(1 - var(--tw-space-y-reverse)));
                margin-bottom: calc(0.25rem * var(--tw-space-y-reverse));
            }
            .space-y-6 > :not([hidden]) ~ :not([hidden]) {
                --tw-space-y-reverse: 0;
                margin-top: calc(1.5rem * calc(1 - var(--tw-space-y-reverse)));
                margin-bottom: calc(1.5rem * var(--tw-space-y-reverse));
            }
            .space-y-3 > :not([hidden]) ~ :not([hidden]) {
                --tw-space-y-reverse: 0;
                margin-top: calc(0.75rem * calc(1 - var(--tw-space-y-reverse)));
                margin-bottom: calc(0.75rem * var(--tw-space-y-reverse));
            }
            .self-center {
                align-self: center;
            }
            .overflow-hidden {
                overflow: hidden;
            }
            .overflow-y-auto {
                overflow-y: auto;
            }
            .overflow-x-hidden {
                overflow-x: hidden;
            }
            .overflow-y-hidden {
                overflow-y: hidden;
            }
            .truncate {
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap;
            }
            .rounded {
                border-radius: 0.25rem;
            }
            .rounded-full {
                border-radius: 9999px;
            }
            .rounded-lg {
                border-radius: 0.5rem;
            }
            .rounded-md {
                border-radius: 0.375rem;
            }
            .rounded-b-none {
                border-bottom-right-radius: 0px;
                border-bottom-left-radius: 0px;
            }
            .rounded-l-md {
                border-top-left-radius: 0.375rem;
                border-bottom-left-radius: 0.375rem;
            }
            .rounded-r-md {
                border-top-right-radius: 0.375rem;
                border-bottom-right-radius: 0.375rem;
            }
            .rounded-t-none {
                border-top-left-radius: 0px;
                border-top-right-radius: 0px;
            }
            .border {
                border-width: 1px;
            }
            .border-2 {
                border-width: 2px;
            }
            .border-b {
                border-bottom-width: 1px;
            }
            .border-b-2 {
                border-bottom-width: 2px;
            }
            .border-l-4 {
                border-left-width: 4px;
            }
            .border-r {
                border-right-width: 1px;
            }
            .border-t {
                border-top-width: 1px;
            }
            .border-t-4 {
                border-top-width: 4px;
            }
            .border-gray-100 {
                --tw-border-opacity: 1;
                border-color: rgb(243 244 246 / var(--tw-border-opacity));
            }
            .border-gray-200 {
                --tw-border-opacity: 1;
                border-color: rgb(229 231 235 / var(--tw-border-opacity));
            }
            .border-gray-300 {
                --tw-border-opacity: 1;
                border-color: rgb(209 213 219 / var(--tw-border-opacity));
            }
            .border-gray-400 {
                --tw-border-opacity: 1;
                border-color: rgb(156 163 175 / var(--tw-border-opacity));
            }
            .border-indigo-400 {
                --tw-border-opacity: 1;
                border-color: rgb(129 140 248 / var(--tw-border-opacity));
            }
            .border-transparent {
                border-color: transparent;
            }
            .border-blue-600 {
                --tw-border-opacity: 1;
                border-color: rgb(37 99 235 / var(--tw-border-opacity));
            }
            .border-green-600 {
                --tw-border-opacity: 1;
                border-color: rgb(22 163 74 / var(--tw-border-opacity));
            }
            .border-red-600 {
                --tw-border-opacity: 1;
                border-color: rgb(220 38 38 / var(--tw-border-opacity));
            }
            .border-yellow-400 {
                --tw-border-opacity: 1;
                border-color: rgb(250 204 21 / var(--tw-border-opacity));
            }
            .bg-blue-800 {
                --tw-bg-opacity: 1;
                background-color: rgb(30 64 175 / var(--tw-bg-opacity));
            }
            .bg-gray-100 {
                --tw-bg-opacity: 1;
                background-color: rgb(243 244 246 / var(--tw-bg-opacity));
            }
            .bg-gray-200 {
                --tw-bg-opacity: 1;
                background-color: rgb(229 231 235 / var(--tw-bg-opacity));
            }
            .bg-gray-50 {
                --tw-bg-opacity: 1;
                background-color: rgb(249 250 251 / var(--tw-bg-opacity));
            }
            .bg-gray-500 {
                --tw-bg-opacity: 1;
                background-color: rgb(107 114 128 / var(--tw-bg-opacity));
            }
            .bg-gray-800 {
                --tw-bg-opacity: 1;
                background-color: rgb(31 41 55 / var(--tw-bg-opacity));
            }
            .bg-indigo-50 {
                --tw-bg-opacity: 1;
                background-color: rgb(238 242 255 / var(--tw-bg-opacity));
            }
            .bg-indigo-500 {
                --tw-bg-opacity: 1;
                background-color: rgb(99 102 241 / var(--tw-bg-opacity));
            }
            .bg-indigo-600 {
                --tw-bg-opacity: 1;
                background-color: rgb(79 70 229 / var(--tw-bg-opacity));
            }
            .bg-red-100 {
                --tw-bg-opacity: 1;
                background-color: rgb(254 226 226 / var(--tw-bg-opacity));
            }
            .bg-red-600 {
                --tw-bg-opacity: 1;
                background-color: rgb(220 38 38 / var(--tw-bg-opacity));
            }
            .bg-red-700 {
                --tw-bg-opacity: 1;
                background-color: rgb(185 28 28 / var(--tw-bg-opacity));
            }
            .bg-red-800 {
                --tw-bg-opacity: 1;
                background-color: rgb(153 27 27 / var(--tw-bg-opacity));
            }
            .bg-white {
                --tw-bg-opacity: 1;
                background-color: rgb(255 255 255 / var(--tw-bg-opacity));
            }
            .bg-green-800 {
                --tw-bg-opacity: 1;
                background-color: rgb(22 101 52 / var(--tw-bg-opacity));
            }
            .bg-blue-600 {
                --tw-bg-opacity: 1;
                background-color: rgb(37 99 235 / var(--tw-bg-opacity));
            }
            .bg-green-600 {
                --tw-bg-opacity: 1;
                background-color: rgb(22 163 74 / var(--tw-bg-opacity));
            }
            .bg-yellow-400 {
                --tw-bg-opacity: 1;
                background-color: rgb(250 204 21 / var(--tw-bg-opacity));
            }
            .bg-green-500 {
                --tw-bg-opacity: 1;
                background-color: rgb(34 197 94 / var(--tw-bg-opacity));
            }
            .bg-red-500 {
                --tw-bg-opacity: 1;
                background-color: rgb(239 68 68 / var(--tw-bg-opacity));
            }
            .bg-opacity-25 {
                --tw-bg-opacity: 0.25;
            }
            .bg-gradient-to-r {
                background-image: linear-gradient(
                    to right,
                    var(--tw-gradient-stops)
                );
            }
            .from-green-600 {
                --tw-gradient-from: #16a34a var(--tw-gradient-from-position);
                --tw-gradient-to: rgb(22 163 74 / 0)
                    var(--tw-gradient-to-position);
                --tw-gradient-stops: var(--tw-gradient-from),
                    var(--tw-gradient-to);
            }
            .from-red-600 {
                --tw-gradient-from: #dc2626 var(--tw-gradient-from-position);
                --tw-gradient-to: rgb(220 38 38 / 0)
                    var(--tw-gradient-to-position);
                --tw-gradient-stops: var(--tw-gradient-from),
                    var(--tw-gradient-to);
            }
            .from-orange-500 {
                --tw-gradient-from: #f97316 var(--tw-gradient-from-position);
                --tw-gradient-to: rgb(249 115 22 / 0)
                    var(--tw-gradient-to-position);
                --tw-gradient-stops: var(--tw-gradient-from),
                    var(--tw-gradient-to);
            }
            .from-teal-500 {
                --tw-gradient-from: #14b8a6 var(--tw-gradient-from-position);
                --tw-gradient-to: rgb(20 184 166 / 0)
                    var(--tw-gradient-to-position);
                --tw-gradient-stops: var(--tw-gradient-from),
                    var(--tw-gradient-to);
            }
            .via-green-500 {
                --tw-gradient-to: rgb(34 197 94 / 0)
                    var(--tw-gradient-to-position);
                --tw-gradient-stops: var(--tw-gradient-from),
                    #22c55e var(--tw-gradient-via-position),
                    var(--tw-gradient-to);
            }
            .via-red-500 {
                --tw-gradient-to: rgb(239 68 68 / 0)
                    var(--tw-gradient-to-position);
                --tw-gradient-stops: var(--tw-gradient-from),
                    #ef4444 var(--tw-gradient-via-position),
                    var(--tw-gradient-to);
            }
            .to-green-800 {
                --tw-gradient-to: #166534 var(--tw-gradient-to-position);
            }
            .to-red-800 {
                --tw-gradient-to: #991b1b var(--tw-gradient-to-position);
            }
            .bg-cover {
                background-size: cover;
            }
            .bg-center {
                background-position: center;
            }
            .bg-no-repeat {
                background-repeat: no-repeat;
            }
            .object-cover {
                -o-object-fit: cover;
                object-fit: cover;
            }
            .p-2 {
                padding: 0.5rem;
            }
            .p-6 {
                padding: 1.5rem;
            }
            .p-4 {
                padding: 1rem;
            }
            .p-8 {
                padding: 2rem;
            }
            .px-1 {
                padding-left: 0.25rem;
                padding-right: 0.25rem;
            }
            .px-2 {
                padding-left: 0.5rem;
                padding-right: 0.5rem;
            }
            .px-3 {
                padding-left: 0.75rem;
                padding-right: 0.75rem;
            }
            .px-4 {
                padding-left: 1rem;
                padding-right: 1rem;
            }
            .px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem;
            }
            .py-1 {
                padding-top: 0.25rem;
                padding-bottom: 0.25rem;
            }
            .py-10 {
                padding-top: 2.5rem;
                padding-bottom: 2.5rem;
            }
            .py-12 {
                padding-top: 3rem;
                padding-bottom: 3rem;
            }
            .py-2 {
                padding-top: 0.5rem;
                padding-bottom: 0.5rem;
            }
            .py-3 {
                padding-top: 0.75rem;
                padding-bottom: 0.75rem;
            }
            .py-4 {
                padding-top: 1rem;
                padding-bottom: 1rem;
            }
            .py-5 {
                padding-top: 1.25rem;
                padding-bottom: 1.25rem;
            }
            .py-6 {
                padding-top: 1.5rem;
                padding-bottom: 1.5rem;
            }
            .py-8 {
                padding-top: 2rem;
                padding-bottom: 2rem;
            }
            .pb-1 {
                padding-bottom: 0.25rem;
            }
            .pb-3 {
                padding-bottom: 0.75rem;
            }
            .pb-4 {
                padding-bottom: 1rem;
            }
            .pl-3 {
                padding-left: 0.75rem;
            }
            .pr-4 {
                padding-right: 1rem;
            }
            .pt-1 {
                padding-top: 0.25rem;
            }
            .pt-2 {
                padding-top: 0.5rem;
            }
            .pt-4 {
                padding-top: 1rem;
            }
            .pt-5 {
                padding-top: 1.25rem;
            }
            .pt-6 {
                padding-top: 1.5rem;
            }
            .pt-8 {
                padding-top: 2rem;
            }
            .text-left {
                text-align: left;
            }
            .text-center {
                text-align: center;
            }
            .text-right {
                text-align: right;
            }
            .text-end {
                text-align: end;
            }
            .font-mono {
                font-family: ui-monospace, SFMono-Regular, Menlo, Monaco,
                    Consolas, "Liberation Mono", "Courier New", monospace;
            }
            .font-sans {
                font-family: Nunito, ui-sans-serif, system-ui, -apple-system,
                    BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue",
                    Arial, "Noto Sans", sans-serif, "Apple Color Emoji",
                    "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            }
            .text-2xl {
                font-size: 1.5rem;
                line-height: 2rem;
            }
            .text-base {
                font-size: 1rem;
                line-height: 1.5rem;
            }
            .text-lg {
                font-size: 1.125rem;
                line-height: 1.75rem;
            }
            .text-sm {
                font-size: 0.875rem;
                line-height: 1.25rem;
            }
            .text-xl {
                font-size: 1.25rem;
                line-height: 1.75rem;
            }
            .text-xs {
                font-size: 0.75rem;
                line-height: 1rem;
            }
            .text-\[0\.25rem\] {
                font-size: 0.25rem;
            }
            .text-\[0\.5rem\] {
                font-size: 0.5rem;
            }
            .text-3xl {
                font-size: 1.875rem;
                line-height: 2.25rem;
            }
            .font-medium {
                font-weight: 500;
            }
            .font-semibold {
                font-weight: 600;
            }
            .uppercase {
                text-transform: uppercase;
            }
            .capitalize {
                text-transform: capitalize;
            }
            .leading-4 {
                line-height: 1rem;
            }
            .leading-5 {
                line-height: 1.25rem;
            }
            .leading-7 {
                line-height: 1.75rem;
            }
            .leading-tight {
                line-height: 1.25;
            }
            .leading-6 {
                line-height: 1.5rem;
            }
            .tracking-wider {
                letter-spacing: 0.05em;
            }
            .tracking-widest {
                letter-spacing: 0.1em;
            }
            .text-gray-200 {
                --tw-text-opacity: 1;
                color: rgb(229 231 235 / var(--tw-text-opacity));
            }
            .text-gray-300 {
                --tw-text-opacity: 1;
                color: rgb(209 213 219 / var(--tw-text-opacity));
            }
            .text-gray-400 {
                --tw-text-opacity: 1;
                color: rgb(156 163 175 / var(--tw-text-opacity));
            }
            .text-gray-500 {
                --tw-text-opacity: 1;
                color: rgb(107 114 128 / var(--tw-text-opacity));
            }
            .text-gray-600 {
                --tw-text-opacity: 1;
                color: rgb(75 85 99 / var(--tw-text-opacity));
            }
            .text-gray-700 {
                --tw-text-opacity: 1;
                color: rgb(55 65 81 / var(--tw-text-opacity));
            }
            .text-gray-800 {
                --tw-text-opacity: 1;
                color: rgb(31 41 55 / var(--tw-text-opacity));
            }
            .text-gray-900 {
                --tw-text-opacity: 1;
                color: rgb(17 24 39 / var(--tw-text-opacity));
            }
            .text-green-400 {
                --tw-text-opacity: 1;
                color: rgb(74 222 128 / var(--tw-text-opacity));
            }
            .text-green-500 {
                --tw-text-opacity: 1;
                color: rgb(34 197 94 / var(--tw-text-opacity));
            }
            .text-green-600 {
                --tw-text-opacity: 1;
                color: rgb(22 163 74 / var(--tw-text-opacity));
            }
            .text-indigo-500 {
                --tw-text-opacity: 1;
                color: rgb(99 102 241 / var(--tw-text-opacity));
            }
            .text-indigo-600 {
                --tw-text-opacity: 1;
                color: rgb(79 70 229 / var(--tw-text-opacity));
            }
            .text-indigo-700 {
                --tw-text-opacity: 1;
                color: rgb(67 56 202 / var(--tw-text-opacity));
            }
            .text-red-500 {
                --tw-text-opacity: 1;
                color: rgb(239 68 68 / var(--tw-text-opacity));
            }
            .text-red-600 {
                --tw-text-opacity: 1;
                color: rgb(220 38 38 / var(--tw-text-opacity));
            }
            .text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity));
            }
            .text-blue-600 {
                --tw-text-opacity: 1;
                color: rgb(37 99 235 / var(--tw-text-opacity));
            }
            .text-yellow-400 {
                --tw-text-opacity: 1;
                color: rgb(250 204 21 / var(--tw-text-opacity));
            }
            .underline {
                text-decoration-line: underline;
            }
            .antialiased {
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale;
            }
            .opacity-0 {
                opacity: 0;
            }
            .opacity-100 {
                opacity: 1;
            }
            .opacity-50 {
                opacity: 0.5;
            }
            .opacity-75 {
                opacity: 0.75;
            }
            .shadow {
                --tw-shadow: 0 1px 3px 0 rgb(0 0 0 / 0.1),
                    0 1px 2px -1px rgb(0 0 0 / 0.1);
                --tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color),
                    0 1px 2px -1px var(--tw-shadow-color);
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
                    var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            }
            .shadow-lg {
                --tw-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1),
                    0 4px 6px -4px rgb(0 0 0 / 0.1);
                --tw-shadow-colored: 0 10px 15px -3px var(--tw-shadow-color),
                    0 4px 6px -4px var(--tw-shadow-color);
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
                    var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            }
            .shadow-md {
                --tw-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1),
                    0 2px 4px -2px rgb(0 0 0 / 0.1);
                --tw-shadow-colored: 0 4px 6px -1px var(--tw-shadow-color),
                    0 2px 4px -2px var(--tw-shadow-color);
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
                    var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            }
            .shadow-sm {
                --tw-shadow: 0 1px 2px 0 rgb(0 0 0 / 0.05);
                --tw-shadow-colored: 0 1px 2px 0 var(--tw-shadow-color);
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
                    var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            }
            .shadow-xl {
                --tw-shadow: 0 20px 25px -5px rgb(0 0 0 / 0.1),
                    0 8px 10px -6px rgb(0 0 0 / 0.1);
                --tw-shadow-colored: 0 20px 25px -5px var(--tw-shadow-color),
                    0 8px 10px -6px var(--tw-shadow-color);
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
                    var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            }
            .outline-none {
                outline: 2px solid transparent;
                outline-offset: 2px;
            }
            .ring-1 {
                --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0
                    var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                --tw-ring-shadow: var(--tw-ring-inset) 0 0 0
                    calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow),
                    var(--tw-shadow, 0 0 #0000);
            }
            .ring-black {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(0 0 0 / var(--tw-ring-opacity));
            }
            .ring-gray-300 {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(209 213 219 / var(--tw-ring-opacity));
            }
            .ring-opacity-5 {
                --tw-ring-opacity: 0.05;
            }
            .filter {
                filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast)
                    var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert)
                    var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
            }
            .transition {
                transition-property: color, background-color, border-color,
                    text-decoration-color, fill, stroke, opacity, box-shadow,
                    transform, filter, -webkit-backdrop-filter;
                transition-property: color, background-color, border-color,
                    text-decoration-color, fill, stroke, opacity, box-shadow,
                    transform, filter, backdrop-filter;
                transition-property: color, background-color, border-color,
                    text-decoration-color, fill, stroke, opacity, box-shadow,
                    transform, filter, backdrop-filter, -webkit-backdrop-filter;
                transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
                transition-duration: 150ms;
            }
            .transition-all {
                transition-property: all;
                transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
                transition-duration: 150ms;
            }
            .duration-150 {
                transition-duration: 150ms;
            }
            .duration-200 {
                transition-duration: 200ms;
            }
            .duration-300 {
                transition-duration: 300ms;
            }
            .duration-75 {
                transition-duration: 75ms;
            }
            .duration-100 {
                transition-duration: 100ms;
            }
            .ease-in {
                transition-timing-function: cubic-bezier(0.4, 0, 1, 1);
            }
            .ease-in-out {
                transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            }
            .ease-out {
                transition-timing-function: cubic-bezier(0, 0, 0.2, 1);
            }
            .even\:bg-gray-200:nth-child(even) {
                --tw-bg-opacity: 1;
                background-color: rgb(229 231 235 / var(--tw-bg-opacity));
            }
            .hover\:border-gray-300:hover {
                --tw-border-opacity: 1;
                border-color: rgb(209 213 219 / var(--tw-border-opacity));
            }
            .hover\:bg-blue-700:hover {
                --tw-bg-opacity: 1;
                background-color: rgb(29 78 216 / var(--tw-bg-opacity));
            }
            .hover\:bg-gray-100:hover {
                --tw-bg-opacity: 1;
                background-color: rgb(243 244 246 / var(--tw-bg-opacity));
            }
            .hover\:bg-gray-50:hover {
                --tw-bg-opacity: 1;
                background-color: rgb(249 250 251 / var(--tw-bg-opacity));
            }
            .hover\:bg-gray-700:hover {
                --tw-bg-opacity: 1;
                background-color: rgb(55 65 81 / var(--tw-bg-opacity));
            }
            .hover\:bg-indigo-600:hover {
                --tw-bg-opacity: 1;
                background-color: rgb(79 70 229 / var(--tw-bg-opacity));
            }
            .hover\:bg-red-500:hover {
                --tw-bg-opacity: 1;
                background-color: rgb(239 68 68 / var(--tw-bg-opacity));
            }
            .hover\:bg-red-600:hover {
                --tw-bg-opacity: 1;
                background-color: rgb(220 38 38 / var(--tw-bg-opacity));
            }
            .hover\:bg-red-700:hover {
                --tw-bg-opacity: 1;
                background-color: rgb(185 28 28 / var(--tw-bg-opacity));
            }
            .hover\:bg-green-700:hover {
                --tw-bg-opacity: 1;
                background-color: rgb(21 128 61 / var(--tw-bg-opacity));
            }
            .hover\:text-gray-400:hover {
                --tw-text-opacity: 1;
                color: rgb(156 163 175 / var(--tw-text-opacity));
            }
            .hover\:text-gray-500:hover {
                --tw-text-opacity: 1;
                color: rgb(107 114 128 / var(--tw-text-opacity));
            }
            .hover\:text-gray-700:hover {
                --tw-text-opacity: 1;
                color: rgb(55 65 81 / var(--tw-text-opacity));
            }
            .hover\:text-gray-800:hover {
                --tw-text-opacity: 1;
                color: rgb(31 41 55 / var(--tw-text-opacity));
            }
            .hover\:text-gray-900:hover {
                --tw-text-opacity: 1;
                color: rgb(17 24 39 / var(--tw-text-opacity));
            }
            .focus\:z-10:focus {
                z-index: 10;
            }
            .focus\:border-blue-300:focus {
                --tw-border-opacity: 1;
                border-color: rgb(147 197 253 / var(--tw-border-opacity));
            }
            .focus\:border-blue-900:focus {
                --tw-border-opacity: 1;
                border-color: rgb(30 58 138 / var(--tw-border-opacity));
            }
            .focus\:border-gray-300:focus {
                --tw-border-opacity: 1;
                border-color: rgb(209 213 219 / var(--tw-border-opacity));
            }
            .focus\:border-gray-900:focus {
                --tw-border-opacity: 1;
                border-color: rgb(17 24 39 / var(--tw-border-opacity));
            }
            .focus\:border-indigo-300:focus {
                --tw-border-opacity: 1;
                border-color: rgb(165 180 252 / var(--tw-border-opacity));
            }
            .focus\:border-indigo-700:focus {
                --tw-border-opacity: 1;
                border-color: rgb(67 56 202 / var(--tw-border-opacity));
            }
            .focus\:border-red-700:focus {
                --tw-border-opacity: 1;
                border-color: rgb(185 28 28 / var(--tw-border-opacity));
            }
            .focus\:border-red-900:focus {
                --tw-border-opacity: 1;
                border-color: rgb(127 29 29 / var(--tw-border-opacity));
            }
            .focus\:border-green-900:focus {
                --tw-border-opacity: 1;
                border-color: rgb(20 83 45 / var(--tw-border-opacity));
            }
            .focus\:bg-gray-100:focus {
                --tw-bg-opacity: 1;
                background-color: rgb(243 244 246 / var(--tw-bg-opacity));
            }
            .focus\:bg-gray-50:focus {
                --tw-bg-opacity: 1;
                background-color: rgb(249 250 251 / var(--tw-bg-opacity));
            }
            .focus\:bg-indigo-100:focus {
                --tw-bg-opacity: 1;
                background-color: rgb(224 231 255 / var(--tw-bg-opacity));
            }
            .focus\:bg-indigo-600:focus {
                --tw-bg-opacity: 1;
                background-color: rgb(79 70 229 / var(--tw-bg-opacity));
            }
            .focus\:bg-red-600:focus {
                --tw-bg-opacity: 1;
                background-color: rgb(220 38 38 / var(--tw-bg-opacity));
            }
            .focus\:text-gray-500:focus {
                --tw-text-opacity: 1;
                color: rgb(107 114 128 / var(--tw-text-opacity));
            }
            .focus\:text-gray-700:focus {
                --tw-text-opacity: 1;
                color: rgb(55 65 81 / var(--tw-text-opacity));
            }
            .focus\:text-gray-800:focus {
                --tw-text-opacity: 1;
                color: rgb(31 41 55 / var(--tw-text-opacity));
            }
            .focus\:text-indigo-800:focus {
                --tw-text-opacity: 1;
                color: rgb(55 48 163 / var(--tw-text-opacity));
            }
            .focus\:outline-none:focus {
                outline: 2px solid transparent;
                outline-offset: 2px;
            }
            .focus\:ring:focus {
                --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0
                    var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                --tw-ring-shadow: var(--tw-ring-inset) 0 0 0
                    calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow),
                    var(--tw-shadow, 0 0 #0000);
            }
            .focus\:ring-blue-200:focus {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(191 219 254 / var(--tw-ring-opacity));
            }
            .focus\:ring-blue-300:focus {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(147 197 253 / var(--tw-ring-opacity));
            }
            .focus\:ring-gray-300:focus {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(209 213 219 / var(--tw-ring-opacity));
            }
            .focus\:ring-indigo-200:focus {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(199 210 254 / var(--tw-ring-opacity));
            }
            .focus\:ring-red-200:focus {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(254 202 202 / var(--tw-ring-opacity));
            }
            .focus\:ring-red-300:focus {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(252 165 165 / var(--tw-ring-opacity));
            }
            .focus\:ring-green-300:focus {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(134 239 172 / var(--tw-ring-opacity));
            }
            .focus\:ring-opacity-50:focus {
                --tw-ring-opacity: 0.5;
            }
            .active\:bg-blue-900:active {
                --tw-bg-opacity: 1;
                background-color: rgb(30 58 138 / var(--tw-bg-opacity));
            }
            .active\:bg-gray-100:active {
                --tw-bg-opacity: 1;
                background-color: rgb(243 244 246 / var(--tw-bg-opacity));
            }
            .active\:bg-gray-50:active {
                --tw-bg-opacity: 1;
                background-color: rgb(249 250 251 / var(--tw-bg-opacity));
            }
            .active\:bg-gray-900:active {
                --tw-bg-opacity: 1;
                background-color: rgb(17 24 39 / var(--tw-bg-opacity));
            }
            .active\:bg-red-600:active {
                --tw-bg-opacity: 1;
                background-color: rgb(220 38 38 / var(--tw-bg-opacity));
            }
            .active\:bg-red-900:active {
                --tw-bg-opacity: 1;
                background-color: rgb(127 29 29 / var(--tw-bg-opacity));
            }
            .active\:bg-green-900:active {
                --tw-bg-opacity: 1;
                background-color: rgb(20 83 45 / var(--tw-bg-opacity));
            }
            .active\:text-gray-500:active {
                --tw-text-opacity: 1;
                color: rgb(107 114 128 / var(--tw-text-opacity));
            }
            .active\:text-gray-700:active {
                --tw-text-opacity: 1;
                color: rgb(55 65 81 / var(--tw-text-opacity));
            }
            .active\:text-gray-800:active {
                --tw-text-opacity: 1;
                color: rgb(31 41 55 / var(--tw-text-opacity));
            }
            .disabled\:opacity-25:disabled {
                opacity: 0.25;
            }
            @media (prefers-color-scheme: dark) {
                .dark\:bg-gray-900 {
                    --tw-bg-opacity: 1;
                    background-color: rgb(17 24 39 / var(--tw-bg-opacity));
                }
            }
            @media (min-width: 640px) {
                .sm\:col-span-4 {
                    grid-column: span 4 / span 4;
                }

                .sm\:col-span-6 {
                    grid-column: span 6 / span 6;
                }

                .sm\:-my-px {
                    margin-top: -1px;
                    margin-bottom: -1px;
                }

                .sm\:mx-0 {
                    margin-left: 0px;
                    margin-right: 0px;
                }

                .sm\:mx-auto {
                    margin-left: auto;
                    margin-right: auto;
                }

                .sm\:-mr-2 {
                    margin-right: -0.5rem;
                }

                .sm\:ml-10 {
                    margin-left: 2.5rem;
                }

                .sm\:ml-3 {
                    margin-left: 0.75rem;
                }

                .sm\:ml-4 {
                    margin-left: 1rem;
                }

                .sm\:ml-6 {
                    margin-left: 1.5rem;
                }

                .sm\:mt-0 {
                    margin-top: 0px;
                }

                .sm\:block {
                    display: block;
                }

                .sm\:flex {
                    display: flex;
                }

                .sm\:grid {
                    display: grid;
                }

                .sm\:hidden {
                    display: none;
                }

                .sm\:h-10 {
                    height: 2.5rem;
                }

                .sm\:w-10 {
                    width: 2.5rem;
                }

                .sm\:w-full {
                    width: 100%;
                }

                .sm\:max-w-2xl {
                    max-width: 42rem;
                }

                .sm\:max-w-lg {
                    max-width: 32rem;
                }

                .sm\:max-w-md {
                    max-width: 28rem;
                }

                .sm\:max-w-sm {
                    max-width: 24rem;
                }

                .sm\:max-w-xl {
                    max-width: 36rem;
                }

                .sm\:flex-1 {
                    flex: 1 1 0%;
                }

                .sm\:translate-y-0 {
                    --tw-translate-y: 0px;
                    transform: translate(
                            var(--tw-translate-x),
                            var(--tw-translate-y)
                        )
                        rotate(var(--tw-rotate)) skewX(var(--tw-skew-x))
                        skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x))
                        scaleY(var(--tw-scale-y));
                }

                .sm\:translate-x-0 {
                    --tw-translate-x: 0px;
                    transform: translate(
                            var(--tw-translate-x),
                            var(--tw-translate-y)
                        )
                        rotate(var(--tw-rotate)) skewX(var(--tw-skew-x))
                        skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x))
                        scaleY(var(--tw-scale-y));
                }

                .sm\:translate-x-2 {
                    --tw-translate-x: 0.5rem;
                    transform: translate(
                            var(--tw-translate-x),
                            var(--tw-translate-y)
                        )
                        rotate(var(--tw-rotate)) skewX(var(--tw-skew-x))
                        skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x))
                        scaleY(var(--tw-scale-y));
                }

                .sm\:scale-100 {
                    --tw-scale-x: 1;
                    --tw-scale-y: 1;
                    transform: translate(
                            var(--tw-translate-x),
                            var(--tw-translate-y)
                        )
                        rotate(var(--tw-rotate)) skewX(var(--tw-skew-x))
                        skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x))
                        scaleY(var(--tw-scale-y));
                }

                .sm\:scale-95 {
                    --tw-scale-x: 0.95;
                    --tw-scale-y: 0.95;
                    transform: translate(
                            var(--tw-translate-x),
                            var(--tw-translate-y)
                        )
                        rotate(var(--tw-rotate)) skewX(var(--tw-skew-x))
                        skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x))
                        scaleY(var(--tw-scale-y));
                }

                .sm\:grid-cols-6 {
                    grid-template-columns: repeat(6, minmax(0, 1fr));
                }

                .sm\:grid-cols-7 {
                    grid-template-columns: repeat(7, minmax(0, 1fr));
                }

                .sm\:items-start {
                    align-items: flex-start;
                }

                .sm\:items-center {
                    align-items: center;
                }

                .sm\:justify-start {
                    justify-content: flex-start;
                }

                .sm\:justify-end {
                    justify-content: flex-end;
                }

                .sm\:justify-center {
                    justify-content: center;
                }

                .sm\:justify-between {
                    justify-content: space-between;
                }

                .sm\:rounded-lg {
                    border-radius: 0.5rem;
                }

                .sm\:rounded-md {
                    border-radius: 0.375rem;
                }

                .sm\:rounded-bl-md {
                    border-bottom-left-radius: 0.375rem;
                }

                .sm\:rounded-br-md {
                    border-bottom-right-radius: 0.375rem;
                }

                .sm\:rounded-tl-md {
                    border-top-left-radius: 0.375rem;
                }

                .sm\:rounded-tr-md {
                    border-top-right-radius: 0.375rem;
                }

                .sm\:p-6 {
                    padding: 1.5rem;
                }

                .sm\:px-0 {
                    padding-left: 0px;
                    padding-right: 0px;
                }

                .sm\:px-20 {
                    padding-left: 5rem;
                    padding-right: 5rem;
                }

                .sm\:px-6 {
                    padding-left: 1.5rem;
                    padding-right: 1.5rem;
                }

                .sm\:pb-4 {
                    padding-bottom: 1rem;
                }

                .sm\:pt-0 {
                    padding-top: 0px;
                }

                .sm\:text-left {
                    text-align: left;
                }

                .sm\:text-xs {
                    font-size: 0.75rem;
                    line-height: 1rem;
                }
            }
            @media (min-width: 768px) {
                .md\:col-span-1 {
                    grid-column: span 1 / span 1;
                }

                .md\:col-span-2 {
                    grid-column: span 2 / span 2;
                }

                .md\:mt-0 {
                    margin-top: 0px;
                }

                .md\:grid {
                    display: grid;
                }

                .md\:grid-cols-2 {
                    grid-template-columns: repeat(2, minmax(0, 1fr));
                }

                .md\:grid-cols-3 {
                    grid-template-columns: repeat(3, minmax(0, 1fr));
                }

                .md\:flex-row {
                    flex-direction: row;
                }

                .md\:gap-6 {
                    gap: 1.5rem;
                }

                .md\:border-l {
                    border-left-width: 1px;
                }

                .md\:border-t-0 {
                    border-top-width: 0px;
                }
            }
            @media (min-width: 1024px) {
                .lg\:col-span-4 {
                    grid-column: span 4 / span 4;
                }

                .lg\:px-8 {
                    padding-left: 2rem;
                    padding-right: 2rem;
                }
            }
            @media (min-width: 1280px) {
                .xl\:flex-row {
                    flex-direction: row;
                }
            }
        </style>
    </head>
    <body class="font-sans bg-gray-100">
        <div class="mx-auto p-8 bg-white shadow-md">
            <h1 class="text-3xl font-semibold mb-4">Invoice</h1>
            <h1 class="text-3xl font-semibold mb-4">
                Customer: {{ $invoice->customer_name }}
            </h1>

            <table class="w-full border-collapse border border-gray-300">
                <thead>
                    <tr>
                        <th class="px-4 py-2 bg-gray-200 text-left">No</th>
                        <th class="px-4 py-2 bg-gray-200 text-left">
                            Category
                        </th>
                        <th class="px-4 py-2 bg-gray-200 text-left">Fruit</th>
                        <th class="px-4 py-2 bg-gray-200 text-left">Unit</th>
                        <th class="px-4 py-2 bg-gray-200 text-left">Price</th>
                        <th class="px-4 py-2 bg-gray-200 text-left">
                            Quantity
                        </th>
                        <th class="px-4 py-2 bg-gray-200 text-left">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($invoice->transactions as $key => $item)
                    <tr>
                        <td class="px-4 py-2">{{ $key + 1 }}</td>
                        <td class="px-4 py-2">
                            {{$item->fruitItem->category->name}}
                        </td>
                        <td class="px-4 py-2">{{$item->fruitItem->name}}</td>
                        <td class="px-4 py-2">{{$item->fruitItem->unit}}</td>
                        <td class="px-4 py-2">{{$item->fruitItem->price}}</td>
                        <td class="px-4 py-2">{{$item->item_quantity}}</td>
                        <td class="px-4 py-2">{{$item->item_amount}}</td>
                    </tr>
                    @endforeach
                    <tr>
                        <td
                            colspan="6"
                            class="px-4 py-2 text-right font-semibold"
                        >
                            Total
                        </td>
                        <td class="px-4 py-2 font-semibold">
                            {{$invoice->total_transaction}}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html>
