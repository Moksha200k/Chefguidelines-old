<?php $__env->startSection('title', 'Home'); ?>
<?php $__env->startSection('description', 'ONE-STOP SHOP FOR YOUR ENGINEERING NEEDS'); ?>
<?php $__env->startSection('keywords', 'shop tools'); ?>

<?php $__env->startSection('content'); ?>

    <main class="main">
        <section class="pt-100 login-register">
            <div class="container">
                <div class="row login-register-cover">
                    <div class="col-lg-4 col-md-6 col-sm-12 mx-auto">
                        <div class="text-center">
                            <p class="font-sm text-brand-2">Register </p>
                            <h2 class="mt-10 mb-5 text-brand-1">Start for free Today</h2>
                            <p class="font-sm text-muted mb-30">Access to all features. No credit card required.</p>
                            <button class="btn social-login hover-up mb-20"><img
                                    src="assets/imgs/template/icons/icon-google.svg" alt="jobbox"><strong>Sign up with
                                    Google</strong></button>
                            <div class="divider-text-center"><span>Or continue with</span></div>
                        </div>

                        <!-- Display validation errors -->
                        <?php if($errors->any()): ?>
                            <div class="alert alert-danger">
                                <ul>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?>

                        <form class="login-register text-start mt-20" action="<?php echo e(route('employer.register')); ?>"
                            method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label class="form-label" for="input-1">Full Name *</label>
                                <input class="form-control" id="input-1" type="text" required name="name"
                                    placeholder="Steven Job" value="<?php echo e(old('name')); ?>">
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="input-2">Email *</label>
                                <input class="form-control" id="input-2" type="email" required name="email"
                                    placeholder="stevenjob@gmail.com" value="<?php echo e(old('email')); ?>">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="input-3">Username *</label>
                                <input class="form-control" id="input-3" type="text" required="" name="username"
                                    placeholder="stevenjob">
                            </div>

                            <div class="form-group">
                                <label id="phone_label" for="phone">Phone Number</label>
                                <input id="phone" type="tel" class="form-control" name="phone_number" required=""
                                    value="<?php echo e(old('phone_number')); ?>">
                            </div>

                            <div class="form-group">
                                <label for="country">Country</label>
                                <select id="country" class="form-control" name="country" required>
                                    <option value="">Select a country</option>
                                    <?php $__currentLoopData = [
            'AX' => 'Aland Islands',
            'AF' => 'Afghanistan',
            'AL' => 'Albania',
            'DZ' => 'Algeria',
            'AD' => 'Andorra',
            'AO' => 'Angola',
            'AI' => 'Anguilla',
            'AQ' => 'Antarctica',
            'AG' => 'Antigua',
            'AR' => 'Argentina',
            'AM' => 'Armenia',
            'AW' => 'Aruba',
            'AU' => 'Australia',
            'AT' => 'Austria',
            'AZ' => 'Azerbaijan',
            'BS' => 'Bahamas',
            'BH' => 'Bahrain',
            'BD' => 'Bangladesh',
            'BB' => 'Barbados',
            'BY' => 'Belarus',
            'PW' => 'Belau',
            'BE' => 'Belgium',
            'BZ' => 'Belize',
            'BJ' => 'Benin',
            'BM' => 'Bermuda',
            'BT' => 'Bhutan',
            'BO' => 'Bolivia',
            'BQ' => 'Bonaire',
            'BA' => 'Bosnia',
            'BW' => 'Botswana',
            'BV' => 'Bouvet Island',
            'BR' => 'Brazil',
            'IO' => 'British Indian Ocean Territory',
            'VG' => 'British Virgin Islands',
            'BN' => 'Brunei',
            'BG' => 'Bulgaria',
            'BF' => 'Burkina Faso',
            'BI' => 'Burundi',
            'KH' => 'Cambodia',
            'CM' => 'Cameroon',
            'CA' => 'Canada',
            'CV' => 'Cape Verde',
            'KY' => 'Cayman Islands',
            'CF' => 'Central African Republic',
            'TD' => 'Chad',
            'CL' => 'Chile',
            'CN' => 'China',
            'CX' => 'Christmas Island',
            'CC' => 'Cocos (Keeling) Islands',
            'CO' => 'Colombia',
            'KM' => 'Comoros',
            'CG' => 'Congo (Brazzaville)',
            'CD' => 'Congo (Kinshasa)',
            'CK' => 'Cook Islands',
            'CR' => 'Costa Rica',
            'HR' => 'Croatia',
            'CU' => 'Cuba',
            'CW' => 'Curaçao',
            'CY' => 'Cyprus',
            'CZ' => 'Czech Republic',
            'DK' => 'Denmark',
            'DJ' => 'Djibouti',
            'DM' => 'Dominica',
            'DO' => 'Dominican Republic',
            'EC' => 'Ecuador',
            'EG' => 'Egypt',
            'SV' => 'El Salvador',
            'GQ' => 'Equatorial Guinea',
            'ER' => 'Eritrea',
            'EE' => 'Estonia',
            'ET' => 'Ethiopia',
            'FK' => 'Falkland Islands',
            'FO' => 'Faroe Islands',
            'FJ' => 'Fiji',
            'FI' => 'Finland',
            'FR' => 'France',
            'GF' => 'French Guiana',
            'PF' => 'French Polynesia',
            'TF' => 'French Southern Territories',
            'GA' => 'Gabon',
            'GM' => 'Gambia',
            'GE' => 'Georgia',
            'DE' => 'Germany',
            'GH' => 'Ghana',
            'GI' => 'Gibraltar',
            'GR' => 'Greece',
            'GL' => 'Greenland',
            'GD' => 'Grenada',
            'GP' => 'Guadeloupe',
            'GT' => 'Guatemala',
            'GG' => 'Guernsey',
            'GN' => 'Guinea',
            'GW' => 'Guinea-Bissau',
            'GY' => 'Guyana',
            'HT' => 'Haiti',
            'HM' => 'Heard Island and McDonald Islands',
            'HN' => 'Honduras',
            'HK' => 'Hong Kong',
            'HU' => 'Hungary',
            'IS' => 'Iceland',
            'IN' => 'India',
            'ID' => 'Indonesia',
            'IR' => 'Iran',
            'IQ' => 'Iraq',
            'IM' => 'Isle of Man',
            'IL' => 'Israel',
            'IT' => 'Italy',
            'CI' => 'Ivory Coast',
            'JM' => 'Jamaica',
            'JP' => 'Japan',
            'JE' => 'Jersey',
            'JO' => 'Jordan',
            'KZ' => 'Kazakhstan',
            'KE' => 'Kenya',
            'KI' => 'Kiribati',
            'KW' => 'Kuwait',
            'KG' => 'Kyrgyzstan',
            'LA' => 'Laos',
            'LV' => 'Latvia',
            'LB' => 'Lebanon',
            'LS' => 'Lesotho',
            'LR' => 'Liberia',
            'LY' => 'Libya',
            'LI' => 'Liechtenstein',
            'LT' => 'Lithuania',
            'LU' => 'Luxembourg',
            'MO' => 'Macao S.A.R., China',
            'MK' => 'Macedonia',
            'MG' => 'Madagascar',
            'MW' => 'Malawi',
            'MY' => 'Malaysia',
            'MV' => 'Maldives',
            'ML' => 'Mali',
            'MT' => 'Malta',
            'MH' => 'Marshall Islands',
            'MQ' => 'Martinique',
            'MR' => 'Mauritania',
            'MU' => 'Mauritius',
            'YT' => 'Mayotte',
            'MX' => 'Mexico',
            'FM' => 'Micronesia',
            'MD' => 'Moldova',
            'MC' => 'Monaco',
            'MN' => 'Mongolia',
            'ME' => 'Montenegro',
            'MS' => 'Montserrat',
            'MA' => 'Morocco',
            'MZ' => 'Mozambique',
            'MM' => 'Myanmar',
            'NA' => 'Namibia',
            'NR' => 'Nauru',
            'NP' => 'Nepal',
            'NL' => 'Netherlands',
            'AN' => 'Netherlands Antilles',
            'NC' => 'New Caledonia',
            'NZ' => 'New Zealand',
            'NI' => 'Nicaragua',
            'NE' => 'Niger',
            'NG' => 'Nigeria',
            'NU' => 'Niue',
            'NF' => 'Norfolk Island',
            'KP' => 'North Korea',
            'NO' => 'Norway',
            'OM' => 'Oman',
            'PK' => 'Pakistan',
            'PS' => 'Palestinian Territory',
            'PA' => 'Panama',
            'PG' => 'Papua New Guinea',
            'PY' => 'Paraguay',
            'PE' => 'Peru',
            'PH' => 'Philippines',
            'PN' => 'Pitcairn',
            'PL' => 'Poland',
            'PT' => 'Portugal',
            'QA' => 'Qatar',
            'IE' => 'Republic of Ireland',
            'RE' => 'Reunion',
            'RO' => 'Romania',
            'RU' => 'Russia',
            'RW' => 'Rwanda',
            'ST' => 'São Tomé and Príncipe',
            'BL' => 'Saint Barthélemy',
            'SH' => 'Saint Helena',
            'KN' => 'Saint Kitts and Nevis',
            'LC' => 'Saint Lucia',
            'SX' => 'Saint Martin (Dutch part)',
            'MF' => 'Saint Martin (French part)',
            'PM' => 'Saint Pierre and Miquelon',
            'VC' => 'Saint Vincent and the Grenadines',
            'SM' => 'San Marino',
            'SA' => 'Saudi Arabia',
            'SN' => 'Senegal',
            'RS' => 'Serbia',
            'SC' => 'Seychelles',
            'SL' => 'Sierra Leone',
            'SG' => 'Singapore',
            'SK' => 'Slovakia',
            'SI' => 'Slovenia',
            'SB' => 'Solomon Islands',
            'SO' => 'Somalia',
            'ZA' => 'South Africa',
            'GS' => 'South Georgia/Sandwich Islands',
            'KR' => 'South Korea',
            'SS' => 'South Sudan',
            'ES' => 'Spain',
            'LK' => 'Sri Lanka',
            'SD' => 'Sudan',
            'SR' => 'Suriname',
            'SJ' => 'Svalbard and Jan Mayen',
            'SZ' => 'Swaziland',
            'SE' => 'Sweden',
            'CH' => 'Switzerland',
            'SY' => 'Syria',
            'TW' => 'Taiwan',
            'TJ' => 'Tajikistan',
            'TZ' => 'Tanzania',
            'TH' => 'Thailand',
            'TL' => 'Timor-Leste',
            'TG' => 'Togo',
            'TK' => 'Tokelau',
            'TO' => 'Tonga',
            'TT' => 'Trinidad and Tobago',
            'TN' => 'Tunisia',
            'TR' => 'Turkey',
            'TM' => 'Turkmenistan',
            'TC' => 'Turks and Caicos Islands',
            'TV' => 'Tuvalu',
            'UG' => 'Uganda',
            'UA' => 'Ukraine',
            'AE' => 'United Arab Emirates',
            'GB' => 'United Kingdom',
            'US' => 'United States',
            'UY' => 'Uruguay',
            'UZ' => 'Uzbekistan',
            'VU' => 'Vanuatu',
            'VA' => 'Vatican City',
            'VE' => 'Venezuela',
            'VN' => 'Vietnam',
            'WF' => 'Wallis and Futuna',
            'EH' => 'Western Sahara',
            'WS' => 'Western Samoa',
            'YE' => 'Yemen',
            'ZM' => 'Zambia',
            'ZW' => 'Zimbabwe',
        ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $code => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($code); ?>"><?php echo e($name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>



                            <div class="form-group">
                                <label class="form-label" for="input-company">Company Name *</label>
                                <input class="form-control" id="input-company" type="text" name="company"
                                    placeholder="Your Company Name" required>
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="input-4">Password *</label>
                                <input class="form-control" id="input-4" type="password" required name="password"
                                    placeholder="************">
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="input-5">Re-Password *</label>
                                <input class="form-control" id="input-5" type="password" required
                                    name="password_confirmation" placeholder="************">
                            </div>
                            <div class="login_footer form-group d-flex justify-content-between">
                                <label class="cb-container">
                                    <input type="checkbox"><span class="text-small">Agree to our terms and
                                        policy</span><span class="checkmark"></span>
                                </label><a class="text-muted" href="page-contact.html">Learn more</a>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-brand-1 hover-up w-100" type="submit" name="login">Submit &amp;
                                    Register</button>
                            </div>
                            <div class="text-muted text-center">Already have an account? <a href="/login">Sign in</a></div>
                        </form>
                    </div>
                    <div class="img-1 d-none d-lg-block"><img class="shape-1"
                            src="assets/imgs/page/login-register/img-1.svg" alt="JobBox"></div>
                    <div class="img-2"><img src="assets/imgs/page/login-register/img-2.svg" alt="JobBox"></div>
                </div>
            </div>
        </section>
    </main>
    <!-- Include intl-tel-input JS Initialization -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var input = document.querySelector("#phone");
            window.intlTelInput(input, {
                initialCountry: "auto",
                geoIpLookup: function(callback) {
                    fetch('https://ipinfo.io?token=your_api_key')
                        .then((resp) => resp.json())
                        .then((resp) => {
                            var countryCode = (resp && resp.country) ? resp.country : "us";
                            callback(countryCode);
                        });
                },
                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#country').select2({
                placeholder: "Select a country",
                allowClear: true
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('includes.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\zennoi marketing\Projects\Software\chefguidelines.com\resources\views/employerLayout/employerRegister.blade.php ENDPATH**/ ?>