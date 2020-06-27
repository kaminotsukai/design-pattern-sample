package visitor.items;

class Fruit implements ItemElement
{
    private int pricePerKg;
    private int weight;
    private String name;

    public Fruit(int pricePerKg, int weight, String name)
    {
        this.pricePerKg = pricePerKg;
        this.weight = weight;
        this.name = name;
    }

    public int getPricePerKg()
    {
        return this.pricePerKg;
    }

    public int getWeight()
    {
        return this.weight;
    }

    public String getName()
    {
        return this.name;
    }

    @Override
    public int accept(ShoppingCartVisitor visitor)
    {
        return visitor.visitFruit(this)
    }
}