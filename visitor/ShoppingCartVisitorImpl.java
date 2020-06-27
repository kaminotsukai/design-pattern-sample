package visitor;

import items.*;

class ShoppingCartVisitorImpl implements ShoppingCartVisitor
{
    @Override
    public int visitBook(Book book)
    {
        int cost = book.getPrice();

        // 本は5000円以上の購入で500円引き
        if (cost > 5000) {
            return cost - 500;
        }

        return cost;
    }

    @Override
    public int visitFruit(Fruit fruit)
    {
        int pricePerKg = fruit.getPricePerKg();
        int weight = fruit.getWeight();

        return pricePerKg * weight;
    }

    private int calculatePrice(ItemElement[] items)
    {
        ShoppingCartVisitor visitor = new ShoppingCartVisitorImpl();

        int sum = 0;

        for(ItemElement item : items)
        {
            sum = sum + item.accept(visitor);
        }

        return sum;
    }
}