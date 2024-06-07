<!doctype html>
<html lang="en">

<head>
    <title>Create Price Rule</title>
    <style>
        .error {
            color: red;
        }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h1 align="center">Create Price Rule</h1>
        <h2 align="center"><a href="{{ route('table') }}">Show Tour Information</a></h2><br>

        <form action="{{ route('store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="status">Status :</label>
                <input type="text" class="form-control" id="status" name="status" value="{{ old('status') }}">
                <div class="error">
                    @error('status')
                        {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="priority">Priority :</label>
                <input type="number" class="form-control" id="priority" name="priority" value="{{ old('priority') }}" >
                <div class="error">
                    @error('priority')
                        {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="value">Value :</label>
                <input type="number" class="form-control" id="value" name="value" value="{{ old('value') }}" >
                <div class="error">
                    @error('value')
                        {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="tour_id">Select Tour</label>
                <select class="form-control" id="tour_id" name="tour_id">
                    <option value="">Select Tour</option>
                    @foreach ($tourBrandData as $tour)
                        <option value="{{ $tour->id }}" {{ old('tour_id') == $tour->id ? 'selected' : '' }}>
                            {{ $tour->tour_name }}
                        </option>
                    @endforeach
                </select>
                <div class="error">
                    @error('tour_id')
                        {{ $message }}
                    @enderror
                </div>
            </div>
            
            <button type="submit" class="btn btn-primary">Create Price Rule</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
