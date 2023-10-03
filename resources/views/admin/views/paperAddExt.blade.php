 <form method="POST" action="{{ route('login') }}" class="mt-2 px-4">
                        @csrf

                        <div class="row mb-3">
                            <label for="module" class="col-md-2 col-form-label  ">{{ __('module') }}</label>

                            <div class="col-md-10">
                                <input id="module" type="text" class="form-control @error('module') is-invalid @enderror" name="module" value="{{ old('module') }}" required autocomplete="module" autofocus>

                                @error('module')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="document" class="col-md-2 col-form-label  ">{{ __('document') }}</label>

                            <div class="col-md-10">
                                <input id="document" type="file" class="form-control @error('document') is-invalid @enderror" name="document" value="{{ old('document') }}" required autocomplete="document" autofocus>

                                @error('document')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                       
                          <div class="row mb-3">
                            <label for="class" class="col-md-2 col-form-label  ">{{ __('class') }}</label>

                            <div class="col-md-10">
                              
                                <select id="class" type="class" class="form-control form-select" @error('class') is-invalid @enderror name="class" value="{{ old('class') }}" required autocomplete="class" autofocus>
                                 <option selected>BIS</option>
                                    <option value="commerce">BIT</option>
                                    <option value="engenearing">BAJ2</option>
                                    <option value="media studies">BAJ1</option>
                                </select>    

                                @error('class')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for='semester' class="col-md-2 col-form-label  ">{{ __('Semester') }}</label>

                            <div class="col-md-10">
                              
                                <select id='semester' type='semester' class="form-control form-select" @error('semester') is-invalid @enderror name='semester' value="{{ old('semester') }}" required autocomplete='semester' autofocus>
                                 <option selected value="1">1</option>
                                    <option value="commerce">2</option>
                                </select>    

                                @error('semester')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for='year' class="col-md-2 col-form-label  ">{{ __('Year') }}</label>

                            <div class="col-md-10">
                              
                                <select id='year' type='year' class="form-control form-select" @error('year') is-invalid @enderror name='year' value="{{ old('year') }}" required autocomplete='year' autofocus>
                                 <option selected value="1">1</option>
                                    <option value="commerce">2</option>
                                    <option value="commerce">3</option>
                                    <option value="commerce">4</option>
                                    <option value="commerce">5</option>
                                </select>    

                                @error('year')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        

                        <div class="row mb-0">
                            <div class="col-md-10 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save') }}
                                </button>

                            </div>
                        </div>
</form>