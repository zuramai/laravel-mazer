@props(['for'])

@error($for)
<div class="invalid-feedback">
    <i class="bx bx-radio-circle"></i>
    {{$errors->first($for)}}
</div>
@enderror