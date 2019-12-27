@include('layout.header')
<main class="container p-3">
    <div class="row no-gutters d-flex flex-column form-group">
        <form class="col-6 mx-auto">
            <input type="text" class="form-control border-bottom" name="name" placeholder="Name"/>

            <input type="email" class="form-control border-bottom" name="email" placeholder="Email Address"/>

            <input type="tel" class="form-control border-bottom" name="phone" placeholder="Phone Number"/>

            <textarea class="form-control border-bottom" rows="5" name="message" placeholder="Message"></textarea>

            <button type="button" class="btn btn-info my-3">SEND</button>
        </form>

    </div>
</main>
@include('layout.footer')


