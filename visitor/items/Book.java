package visitor.items;

import

class Book implements ItemElement
{
    private int price;
    private String isbnNumber;

    public Book(int cost , String isbn)
    {
        this.price = cost;
        this.isbnNumber = isbn;
    }

    public int getPrice()
    {
        return this.price;
    }

    public String getIsbnNumber()
    {
        return this.isbnNumber;
    }

    @Override
    public int accept(ShoppingCartVisitor visitor)
    {
        return visitor.visitBook(this);
    }
}