@extends('../layout')

@section('content')
    <h1 class="display-4 fst-italic">Bize Ulaşın</h1>
    <p class="lead my-3">
        Bize Ulaşın İçeriği
    </p>

    @if($errors->any())
        <div class="alert alert-danger" role="alert">
            Form verileri hatalı!
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <form method="post">
        @csrf

        <div class="form-group">
            <label>Ad</label>
            <input type="text"
                   class="form-control @error('first_name') is-invalid @enderror"
                   name="first_name"
                   value="{{ old('first_name') }}">
            @error('first_name')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label>Soyad</label>
            <input type="text"
                   class="form-control @error('last_name') is-invalid @enderror"
                   name="last_name"
                   value="{{ old('last_name') }}">
            @error('last_name')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label>E-Posta</label>
            <input type="text"
                   class="form-control @error('email') is-invalid @enderror"
                   name="email"
                   value="{{ old('email') }}">
            @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label>Bölümünüz</label>
            <select class="form-select @error('department') is-invalid @enderror" name="department">
                @foreach($departments as $department)
                    <option value="{{ $department['id'] }}"
                        {{ old('department') == $department['id'] ? 'selected' : '' }}>
                        {{ $department['name'] }}
                    </option>
                @endforeach
            </select>
            @error('department')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label>Mesajınız</label>
            <textarea class="form-control @error('message') is-invalid @enderror" name="message">{{ old('message') }}</textarea>
            @error('message')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <button class="btn btn-primary" type="submit">Gönder</button>
        </div>
    </form>
@endsection

@section('footer')

    Bize Ulaşın Footerı
    @parent
@endsection
