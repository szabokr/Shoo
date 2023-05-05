    <div class="modal modal-lg fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-1 display-5 text-uppercase" id="exampleModalLabel">Cart<i class="bi bi-cart3 ms-2"></i></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <!-- CART TABLE STARTS HERE! -->
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col" class="text-uppercase">Name</th>
                                        <th scope="col" class="text-uppercase">Price</th>
                                        <th scope="col" class="text-uppercase text-center">Quantity</th>
                                        <th scope="col" class="text-uppercase text-center">Modify</th>
                                    </tr>
                                </thead>
                                <tbody class="align-middle">
                                    <tr>
                                        <th scope="row">IMG HERE</th>
                                        <td>Random Shoe Example</td>
                                        <td>$ XXX</td>
                                        <td class="text-center"><button class="btn btn-sm"><i class="bi bi-dash-lg"></i></button>5<button class="btn btn-sm"><i class="bi bi-plus-lg"></i></button></td>
                                        <td class="text-center">
                                            <button class="btn btn-sm cartIconHover"><i class="bi bi-x-lg"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- CART TABLE ENDS HERE -->
                        </div>
                    </div>

                    <div class="d-flex justify-content-between mt-5">
                        <h2 class="fs-3 display-1 text-uppercase">Subtotal:</h2>
                        <h2 class="fs-4 display-1 text-uppercase">$Sum</h2>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal"><i class="bi bi-caret-left"></i>Back to shopping</button>
                    <button type="button" class="btn btn-outline-success" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Delivery Options<i class="bi bi-caret-right"></i></button>
                </div>
            </div>
        </div>
    </div>

    <!-- 2. MODAL -->
    <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-1 display-5 text-uppercase" id="exampleModalLabel">Delivery<i class="bi bi-truck ms-2"></i></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <table class="table table-hover border-top border-1 mt-3">
                                <!-- <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Handle</th>
                                        <th scope="col" class="text-center">Select</th>
                                    </tr>
                                </thead> -->
                                <tbody class="align-items-center">
                                    <tr>
                                        <th scope="row"><img src="images/cartSystem/deliveryOptions/glsmini.png" alt="dhlimage" class="deliveryIcons me-2 rounded">GLS</th>
                                        <td>3 days in general</td>
                                        <td class="fw-bold">$ 3.99</td>
                                        <td class="">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row"><img src="images/cartSystem/deliveryOptions/fedexmini.png" alt="dhlimage" class="deliveryIcons me-2 rounded">FEDEX</th>
                                        <td>2 days in general</td>
                                        <td class="fw-bold">$ 5.99</td>
                                        <td class="">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row"><img src="images/cartSystem/deliveryOptions/dpdmini.png" alt="dhlimage" class="deliveryIcons me-2 rounded">DPD</th>
                                        <td>3-4 days in general</td>
                                        <td class="fw-bold">$ 2.99</td>
                                        <td class="">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row"><img src="images/cartSystem/deliveryOptions/dhlmini.png" alt="dhlimage" class="deliveryIcons me-2 rounded">DHL</th>
                                        <td>3 days in general</td>
                                        <td class="fw-bold">$ 3.99</td>
                                        <td class="">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row"><img src="images/cartSystem/deliveryOptions/shoosh.png" alt="dhlimage" class="deliveryIcons me-2 rounded">AT STORE</th>
                                        <td>Weekdays from 8 am to 4 pm</td>
                                        <td class="fw-bold">FREE</td>
                                        <td class="">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-secondary" data-bs-target="#exampleModal" data-bs-toggle="modal"><i class="bi bi-caret-left"></i>Back to Cart</button>
                    <button type="button" class="btn btn-outline-success" data-bs-target="#exampleModalToggle3" data-bs-toggle="modal">Payment<i class="bi bi-caret-right"></i></button>
                </div>
            </div>
        </div>
    </div>

    <!-- 3. MODAL -->
    <div class="modal fade" id="exampleModalToggle3" aria-hidden="true" aria-labelledby="exampleModalToggleLabel3" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-1 display-5 text-uppercase" id="exampleModalLabel">Payment<i class="bi bi-wallet ms-2"></i></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <table class="table table-hover border-top border-1 mt-3">
                                <!-- <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Handle</th>
                                        <th scope="col" class="text-center">Select</th>
                                    </tr>
                                </thead> -->
                                <tbody class="align-items-center">
                                    <tr>
                                        <th scope="row"><i class="bi bi-credit-card me-1"></i>Credit Card</th>
                                        <td class="fw-bold">FREE</td>
                                        <td class="">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row"><i class="bi bi-wallet2 me-1"></i>Personal</th>
                                        <td class="fw-bold">$ 0.99</td>
                                        <td class="">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-secondary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal"><i class="bi bi-caret-left"></i>Back to Delivery</button>
                    <button type="button" for="submit" value="1" name="submit" class="btn btn-outline-success" data-bs-dismiss="modal">CHECKOUT<i class="bi bi-check2-circle ms-1"></i></button>
                </div>
            </div>
        </div>
    </div>