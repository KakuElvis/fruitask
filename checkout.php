<?php include './partials/head.php';?>
    <?php include './partials/nav.php';?>

    <div class="py-16  overflow-hidden">
        <div class="container m-auto px-6 space-y-8 md:px-12 lg:px-20">
            <div>
                <h2 class="mt-4 text-center text-2xl text-main font-bold md:text-4xl"> Checkout</h2>
            </div>
            <div class="   md:-mx-8  bg-white rounded overflow-hidden">
                <div class="py-16 bg-white">  
                    <div class="container lg:ml-[10rem] px-6 text-gray-600 md:px-12 xl:px-6">
                        <div class="space-y-6 md:space-y-0 md:flex md:gap-6 lg:items-center lg:gap-10">
                            <div class=" md:7/12 lg:w-/12  space-y-2 bg-white rounded-xl shadow-lg border ">
                                <div class="m-5  flex flex-col lg:flex-row">
                                    <form class="w-full max-w-lg">
                                        <div class="flex flex-wrap -mx-3 mb-6">
                                          <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                              First Name
                                            </label>
                                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Kwame">
                                          </div>
                                          <div class="w-full md:w-1/2 px-3">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                                              Last Name
                                            </label>
                                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Doe">
                                          </div>
                                        </div>
                                        <div class="flex flex-wrap -mx-3 mb-6">
                                          <div class="w-full px-3">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                                              Company (Optional)
                                            </label>
                                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="password" placeholder="Fruitask">
                                          </div>
                                        </div>
                                        <div class="flex flex-wrap -mx-3 mb-6 gap-3">
                                          <div class="w-full px-3">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                                              Country
                                            </label>
                                            <div class="relative">
                                              <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                                                <option>Mexico</option>
                                                <option>Ghana</option>
                                                <option>Philipians</option>
                                              </select>
                                              <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="w-full px-3">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                                              City
                                            </label>
                                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="Albuquerque">
                                          </div>
                                          <div class="w-full px-3">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                                              Zip
                                            </label>
                                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="text" placeholder="90210">
                                          </div>
                                          <div class="w-full px-3">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                                              Phone Number
                                            </label>
                                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="text" placeholder="0021833937393">
                                          </div>
                                          <div class="w-full px-3">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                                              Email Address
                                            </label>
                                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="text" placeholder="fruitask@fruitask.com">
                                          </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            
                            <div class="md:5/12 lg:w-7/12 flex gap-4 flex-col lg:flex lg:flex-col">
                                <div>
                                    <div class="md:5/12 lg:w-7/12 flex gap-4 flex-col lg:flex lg:flex-col bg-gray-200 border rounded">
                                        <div class="m-5">
                                          <h5 class="font-bold text-lg">Order Summary</h5>
                                          <div class="flex flex-col gap-2 items-end">
                                            <div class="flex gap-2">
                                              <p>Subtotal : </p>
                                              <p>$300</p>
          
                                            </div>
                                            <hr class="bg-red-900">
                                            <div class="flex gap-2">
                                              <p>Shiiping</p>
                                              <p>$10</p>
          
                                            </div>
                                            <div class="flex gap-2">
                                              <p>Tax</p>
                                              <p>$5</p>
                                            </div>
          
                                            <div class="flex gap-2">
                                              <p>Order Total</p>
                                              <p>$315</p>
                                            </div>
                                          </div>
                                        </div>  
                                      </div>
                                    <div class="flex mt-5 -ml-0.5 gap-6">
                                        <div class="flex text-white mt-4 p-3 h-full w-[14rem] text-center bg-main rounded-lg">
                                            <div class="flex flex-col">
                                                <img src="./img/cards/bank.png" class="h-12" alt="">
                                                <div>
                                                    <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 ">
                                                    <label for="default-radio-1" class="ml-2 text-sm font-medium text-blue-900 ">Pay through bank</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex text-white mt-4 p-3 h-full w-[14rem] text-center bg-main rounded-lg">
                                            <div class="flex flex-col">
                                                <img src="./img/cards/visa.png" class="h-12" alt="">
                                                <div>
                                                    <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 ">
                                                    <label for="default-radio-1" class="ml-2 text-sm font-medium text-blue-900 ">Pay with bank</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex">
                                    <div class="flex items-center h-5">
                                        <input id="helper-checkbox" aria-describedby="helper-checkbox-text" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 ">
                                    </div>
                                    <div class="ml-2 text-sm">
                                        <label for="helper-checkbox" class="font-medium text-gray-900 ">Free shipping in Philipians</label>
                                        <p id="helper-checkbox-text" class="text-xs font-normal text-gray-500 ">For orders shipped from $25 in books or $29 in other categories</p>
                                    </div>
                                </div>
                                <div class="text-white mt-4 p-3 h-[3rem] w-[8rem] text-center bg-main rounded-lg"> 
                                    <a href="#" class="font-bold">Place Order</a> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 

   

    <?php include "./partials/footer.php"?>