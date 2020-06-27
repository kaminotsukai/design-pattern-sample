package visitor.items;

import visitor.ShoppingCartVisitor;

interface ItemElement
{
    public int accept(ShoppingCartVisitor visitor);
}