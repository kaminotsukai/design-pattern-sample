package visitor;

import items.*;

interface ShoppingCartVisitor
{
    public int visitBook(Book book);
    public int visitFruit(Fruit fruit);
}