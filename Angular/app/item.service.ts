import { Injectable } from '@angular/core';
import { Item } from './item';

@Injectable({
  providedIn: 'root'
})
export class ItemService {

  constructor() { }


  items: Item[] = [
    {id: 1, name: "Iphone", price: 2000, quantity: 3},
    {id: 2, name: "mac-book", price: 10000, quantity: 30},
    {id: 3, name: "PC", price: 50000, quantity: 18}
  ];

  getItems(): Item[]{
    return this.items;
  }
}
