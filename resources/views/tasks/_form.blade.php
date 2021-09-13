<div class="mb-2">
    <input class="form-control @error('list') is-invalid @error" type="text" name="list"
        placeholder="The name of the task" value="{{ old('list', $task->list) }}">
    {{-- or using operators {{ old('list') ?? $task->list }} --}}
    @error('list')
    <span class="invalid-feedback">{{ $message }}</span>
    @enderror
</div>
<button class="btn btn-primary" type="submit">{{ $submit }}</button>
