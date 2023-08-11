<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Cart extends Model
{
    use HasFactory;

    protected $fillable = ['user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function cartItems()
    {
        return $this->hasMany(FItem::class);
    }

    public static function getContent()
    {
        $items = FItem::all();
    
        $content = [];
    
        foreach ($items as $item) {
            $content[] = [
                'id' => $item->id,
                'product' => $item->name, // Assuming 'name' is the column in the 'f_items' table that holds the product name
                'quantity' => $item->quantity,
                'price' => $item->price, // Assuming 'price' is the column in the 'f_items' table that holds the product price
                'subtotal' => $item->quantity * $item->price,
            ];
        }
    
        return $content;
    }
    public function removeItem($itemId)
    {
        $cartItem = $this->cartItems()->where('id', $itemId)->first();
    
        if ($cartItem) {
            $cartItem->delete();
            return true;
        }
    
        return false;
    }
        
}

