<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Fitem;
use App\Models\Medicine;


use Barryvdh\DomPDF\Facade\Pdf;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Ramsey\Collection\Collection;
use Svg\Tag\Rect;

/**
 * Summary of PharmacyController
 */
class PharmacyController extends Controller
{
    public function bill(){
        $data=Fitem::all();

        return view('famacy.bill', compact('data'));
    }
    public function addmedicine(){
        return view('famacy.addmedicine');
    }

  
    public function uploaditem(Request $request){
        $fitem=new Fitem;

        $image=$request->file;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->file->move('fitemimage',$imagename);
        $fitem->image=$imagename;

        $fitem->code=$request->code;
        $fitem->name=$request->name;
        $fitem->type=$request->type;
        $fitem->price=$request->price;
        
        
        $fitem->Quentity = $request->Quentity;

        $fitem->save();
        return redirect()->back();
    }
    public function showmedicine()
    {
        $data=Medicine::all();
        return view('famacy.home',compact('data'));
    }

    public function bill_P(){
        
        $data=Fitem::all();
        return view('famacy.bill',compact('data'));
    }

    public function cartss(Request $request, $id){
        $items = Fitem::all();
        $cartItems = Cart::getContent();
        $patient =Medicine::find($id);
       
        $cart = Cart::first();
        
        $cartItem = FItem::find($id);



        $search =$request['search'];
        $data=Fitem::all();
        $Fitem = Fitem::count();

        $search =$request['search']??"";
        if($search !="null"){
            $data=Fitem::where('name','LIKE', "$search%")->orwhere('id','LIKE', "$search")->paginate(2);


        }else{
            $data=Fitem::all();

        }
        
        if($search !="null"){
        
        
        return view('famacy.cart',compact('data','Fitem','search','patient','items','cartItems','cart','cartItem'));
        }
        
    }


  

    public function removeFromCart($id)
    {
        $cart = session()->get('cart');
    
        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }
    
        return redirect()->back()->with('success', 'Item removed from cart successfully!');
    }
    public function updateQuantity(Request $request, $id)
    {
        $cart = session()->get('cart');
    
        if (isset($cart[$id])) {
            $Quentity = $request->input('Quentity');
            $cart[$id]['Quentity'] = $Quentity;
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Item quantity updated successfully!');
        }
    
        return redirect()->back()->with('error', 'Item not found in cart!');
    }
      
    public function updateQuantitys(Request $request, $id)
    {
        $cart = session()->get('cart');
    
        if (isset($cart[$id])) {
            $quantity = $request->input('quantity');
            $item = $cart[$id];
    
            // Retrieve the item from the database
            $fitem = Fitem::find($item['id']);
    
            if ($fitem) {
                // Check if the requested quantity is a positive integer
                if ($quantity > 0 && is_int($quantity)) {
                    // Update the quantity in the cart
                    $item['Quentity'] = $quantity;
                    $cart[$id] = $item;
                    session()->put('cart', $cart);
    
                    // Update the quantity in the database
                    $fitem->quantity = $quantity;
                    $fitem->save();
    
                    return redirect()->back()->with('success', 'Item quantity updated successfully!');
                } else {
                    return redirect()->back()->with('error', 'Invalid quantity!');
                }
            } else {
                return redirect()->back()->with('error', 'Item not found in database!');
            }
        }
    
        return redirect()->back()->with('error', 'Item not found in cart!');
    }
    
    


    // public function addToCart(Request $request, $id)
    // {
    //     $fitem = Fitem::find($id);
    
    //     if ($fitem) {
    //         $requestedQuantity = $request->Quentity; // Update variable name here
    
    //         // Check if the requested quantity is available in the stock
    //         if ($fitem->Quentity >= $requestedQuantity) {
    //             // Add the item to the cart
    //             $cart = session()->get('cart', []);
    //             if (isset($cart[$id])) {
    //                 // If the item already exists in the cart, increment the quantity
    //                 $cart[$id]['quantity'] += $requestedQuantity;
    //             } else {
    //                 // If the item is not in the cart, add it
    //                 $cart[$id] = [
    //                     'name' => $fitem->name,
    //                     'Quentity' => $requestedQuantity,
    //                     'price' => $fitem->price,
    //                     // Add other relevant item details
    //                 ];
    //             }
    
    //             // Update the cart in the session
    //             session()->put('cart', $cart);
    
    //             // Decrease the stock quantity
    //             $fitem->Quentity -= $requestedQuantity;
    //             $fitem->save();
    
    //             return redirect()->back()->with('success', 'Item added to cart successfully!');
    //         } else {
    //             return redirect()->back()->with('error', 'Insufficient quantity in stock.');
    //         }
    //     }
    
    //     return redirect()->back()->with('error', 'Item not found.');
    // }
    
    
    // public function addcart(Request $request, $id){

    //     $cart = new Cart;
    //     $fitem = fitem::find($id);

    //     $cart->name=$fitem->name;
    //     $cart->code=$fitem->code;
    //     $cart->type=$fitem->type;
    //     $cart->price= $fitem->price;
    //     $cart->quentity=$request->quentity;

    //     $cart ->save();

    //     return redirect()->back();


    // }


    public function addToCart($id)
    {
        $Fitem = Fitem::find($id);

        if(!$Fitem) {

            abort(404);

        }

        $cart = session()->get('cart');

        // if cart is empty then this the first product
        if(!$cart) {

            $cart = [
                    $id => [
                        "id" => $Fitem->id,
                        "name" => $Fitem->name,
                        "Quentity" => 1,
                        "price" => $Fitem->price,
                        "code" => $Fitem->Code
                    ]
            ];

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {

            $cart[$id]['Quentity']++;

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');

        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "name" => $Fitem->name,
            "Quentity" => 1,
            "price" => $Fitem->price,
            "code" => $Fitem->code
        ];

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
    public function update(Request $request)
    {
        if($request->id and $request->Quentity)
        {
            $cart = session()->get('cart');

            $cart[$request->id]["Quentity"] = $request->Quentity;

            session()->put('cart', $cart);

            session()->flash('success', 'Cart updated successfully');
        }
    }

    public function remove(Request $request)
    {
        if($request->id) {

            $cart = session()->get('cart');

            if(isset($cart[$request->id])) {

                unset($cart[$request->id]);

                session()->put('cart', $cart);
            }

            session()->flash('success', 'Product removed successfully');
        }
    }
    public function search(Request $request){
                $search =$request['search'];
                $data=Fitem::all();
               
                $search =$request['search']??"";
                if($search !="null"){
                    $data=Fitem::where('name','LIKE', "$search%")->orwhere('id','LIKE', "$search")->get();
        
        
                }else{
                    $data=Fitem::all();
        
                }
                
                if($search !="null"){
                
                
                return view('/',compact('data','appointment','search'));
                }
                
    }

    public function invoice($id){
        
        $patient =Medicine::find($id);

        $data = [
            'patient' => $patient,
            
        ];

        $pdf = Pdf::loadView('famacy.invoice', $data );

        return $pdf->download('Hospitalinvoice.pdf');
        //return view('famacy.invoice',compact('patient'));
    }
    // public function search(Request $request){

    //     if(isset($_GET['query'])){
    //         $search_text = $_GET['query'];
    //         $medicines =DB::table('medicines')->where('name','LIKE','%'.$search_text.'%')->paginate(2);
    //         return view('famacy.home',['medicines'=>$medicines]);
    //     }else{
    //         return view('famacy.home');
    //     }

      
    // }
    public function invoice0($id){
        
        $patient =Medicine::find($id);

        $data = [
            'patient' => $patient,
            
        ];

        $pdf = Pdf::loadView('famacy.invoice0', $data );

        //return $pdf->download('fundaofwebit.pdf');
        return view('famacy.invoice0',compact('patient'));
    }
//     public function update(Request $request)
// {
//     // Update the cart based on the request data (id and quantity)
//     // ...

//     return response()->json(['success' => true, 'message' => 'Cart updated successfully']);
// }

// public function remove(Request $request)
// {
//     // Remove the item from the cart based on the request data (id)
//     // ...

//     return response()->json(['success' => true, 'message' => 'Item removed successfully']);
// }
public function updateCart(Request $request)
{
    $id = $request->input('id');
    $quantity = $request->input('Quentity');

    // Update the cart item with the new quantity
    $cart = session()->get('cart', []);

    if (isset($cart[$id])) {
        $cart[$id]['Quentity'] = $quantity;
        session()->put('cart', $cart);
        return response()->json(['success' => true, 'message' => 'Cart updated successfully']);
    }

    return response()->json(['success' => false, 'message' => 'Item not found in the cart']);
}

// public function deleteFromCart(Request $request)
// {
//     $id = $request->input('id');

//     // Remove the item from the cart
//     $cart = session()->get('cart', []);

//     if (isset($cart[$id])) {
//         unset($cart[$id]);
//         session()->put('cart', $cart);
//         return response()->json(['success' => true, 'message' => 'Item deleted successfully']);
//     }

//     return response()->json(['success' => false, 'message' => 'Item not found in the cart']);
// }

// public function removeItem(Request $request)
// {
//     $itemId = $request->input('itemId');

//     // Remove the item from the cart based on the $itemId

//     // Return a JSON response indicating success or failure
//     return response()->json(['success' => true, 'message' => 'Item removed from the cart']);
// }

// //2023-06-18


// 
}
