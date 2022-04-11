<div class="form-group my-4">
    <label for="day">Day</label>
    <input id="day" type="text" class="form-control" name="day" value="{{ old('day') ?? $lesson->day }}">
    <div>{{ $errors->first('day') }}</div>
</div>

<div class="form-group my-4">
    <label for="name">Class Name</label>
    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') ?? $lesson->name }}">
    <div>{{ $errors->first('name') }}</div>
</div>

<div class="form-group my-4">
    <label for="age">Age</label>
    <input id="age" type="text" class="form-control" name="age" value="{{ old('age') ?? $lesson->age }}">
    <div>{{ $errors->first('age') }}</div>
</div>

<div class="form-group my-4">
    <label for="time">Time</label>
    <input id="time" type="text" class="form-control" name="time" value="{{ old('time') ?? $lesson->time }}">
    <div>{{ $errors->first('time') }}</div>
</div>

<div class="form-group my-4">
    <label for="description">Description</label>
    <textarea name="description" cols="30" rows="10" class="form-control" id="lesson-textarea">{{ old('description') ?? $lesson->description }}</textarea>
    <div>{{ $errors->first('description') }}</div>
</div>

@csrf
