<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<h2>Hilum.et</h2>
<!-- <img src="<?php echo url('/');?>/assets/download.png" class="logo" alt="Laravel Logo"> -->
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
