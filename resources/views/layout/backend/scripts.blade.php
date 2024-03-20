<!-- BEGIN: Vendor JS-->
<script src="{{ asset('backend/app-assets/vendors/js/material-vendors.min.js') }}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{ asset('backend/app-assets/vendors/js/charts/chart.min.js') }}"></script>
<script src="{{ asset('backend/app-assets/vendors/js/charts/apexcharts/apexcharts.min.js') }}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{ asset('backend/app-assets/js/core/app-menu.js') }}"></script>
<script src="{{ asset('backend/app-assets/js/core/app.js') }}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="{{ asset('backend/app-assets/js/scripts/pages/material-app.js') }}"></script>
<script src="{{ asset('backend/app-assets/js/scripts/pages/dashboard-crypto.js') }}"></script>
<!-- END: Page JS-->

<!-- BEGIN: Sweetalert2 JS-->
<script src="{{ asset('backend/app-assets/data/sweetalert2/dist/sweetalert2.min.js') }}"></script>
<!-- END: Sweetalert2 JS-->

@stack('scripts')
