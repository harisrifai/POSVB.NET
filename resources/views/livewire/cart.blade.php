<div >
    {{-- Care about people's approval and you will be their prisoner. --}}
<div class="row">
    <div class="col-md-8">
       <div class="card">
                <div class="card-header">
                    <div class="row mb-2">
                    <div class="col-md-6"><h4 class="font-weight-bold">List Product</h4> </div>
                    <div class="col-md-6"><input wire:model="search" type="text" placeholder="Typing your item here" class="form-control">                 </div> 
                    </div>
                </div>
           <div class="card-body">
                
               <div class="row">
               @forelse($products as $product)
               <div class="col-md-3 mb-3">
                    <div class="card" wire:click="addItem({{$product->id}})" style="cursor:pointer">
                        
                        <img src="{{ asset('storage/images/'.$product->image)}}" alt="Product" style="object-fit:contain; width:100%; height:170px">
                        <button wire:click="addItem({{$product->id}})" class="btn btn-success btn-sm" style="position:absolute;top:0;right:0;padding:10px 10px"><i class="fas fa-shopping-bag fa-lg"></i></button>
                         
                        <h6 class="text-center font-weight-bold mt-2">{{$product->plu}} . {{$product->name}}</h6>
                        <h8 class="text-center">Stock :{{$product->qty}}</h8>
                        <h8 class="text-center">Rp.{{ number_format($product->price,2,',','.')}} </h8>
                       

                    </div>
               </div>
               @empty
               <div class="col-sm-12 mt-5">
                   <h7 class="text-center font-weight-bold text-primary">Product not Found</h7>
               </div>
               @endforelse
               </div>
               <div style="display:flex;justify-content:center;">{{$products->links()}}</div>
           </div>
           
       </div>
    </div>
    <div class="col-md-4">
    <div class="card">
           <div class="card-body ">
               <h2 class="font-weight-bold mb-1 center">Cart List </h2> 
                 <table class="table table-sm table-bordered table-hovered">
                 <thead class="bg-secondary text-white">
                    <tr>
                        <th>No</th>
                        <th>Item</th>
                        <th>Qty</th>
                        <th>action</th>
                        <th>Price</th>
                    </tr>
                 </thead>
                 <tbody>
                 @forelse($cart as $index=>$cart)
                     <tr class="font-weight-bold text-dark">
                        <td class="text-center">{{$index + 1}}</td>
                        <td><span href="#" class="font-weight-bold text-dark;cursor:pointer">{{$cart['name']}}</span></td>
                        <td class="text-center">{{$cart['qty']}} <td>
                        
                         <i class="fas fa-plus"  wire:click="increaseItem('{{$cart['rowId']}}')"  style="font-size:13px;cursor:pointer;color:green"></i>
                         <i class="fas fa-minus" wire:click="decreaseItem('{{$cart['rowId']}}')"  style="font-size:13px;cursor:pointer;color:pink"></i> 
                         <i class="fas fa-trash" wire:click="removeItem('{{$cart['rowId']}}')"  style="font-size:13px;cursor:pointer;color:red"></i>
                        
                        <td>Rp.{{ number_format($cart['price'],2,',','.')}}</td>
                     </tr>   
                 @empty
                    <td colspan="3" class="text-center">Empty Cart</td>

                 @endforelse
                 </tbody>
                 </table>
            </div>
       </div> 
         
    
            <div class="card">
                <div class="card-body">
                   <div> <h7 class="font-weight-bold">Cart Summary</h7></div>
                   <div> <h7 class="font-weight-bold">Sub Total: Rp.{{ number_format($summary['sub_total'],2,',','.')}}  </h7></div>
                   <div> <h7 class="font-weight-bold">Tax: Rp.{{ number_format($summary['pajak'],2,',','.')}}</h7></div>
                   <div> <h7 class="font-weight-bold">Total: Rp.{{ number_format($summary['total'],2,',','.')}}</h7></div>
                <div>
                   <button wire:click="enableTax"   class="btn btn-primary btn-block">add tax</button>
                   <button wire:click="disableTax"  class="btn btn-danger btn-block">Remove tax</button>
                </div>
                <div class="mt-4">
                   <button   class="btn btn-success active btn-block">Save Transaction</button>
                </div>
                </div>
            </div>
    </div>
</div> 
</div>
