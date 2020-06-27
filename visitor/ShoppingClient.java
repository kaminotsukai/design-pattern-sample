package visitor;

import items.*;

class ShoppingClient
{
    public static void main(String[] args) {
        ItemElement[] items = new ItemElement[] {
                                new Book(2000, "1234"),
                                new Book(6000, "1235"),
                                new Book(7000, "1236"),
                                new Book(1000, "1237"),
                                new Fruit(500, 5, "南瓜"),
                                new Fruit(800, 5, "苺"),
                            };

        ShoppingCartVisitorImpl visitor = new ShoppingCartVisitorImpl();
        int total = visitor.calculatePrice(items);

        System.out.println(total);
    }


}
