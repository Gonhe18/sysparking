@if (session()->has('message'))
<script>
toast.success("{{ @session('message') }}", "info")
</script>
@endif
@if (session()->has('msg-error'))
<script>
toast.error("{{ @session('msg-error') }}", "info")
</script>
@endif