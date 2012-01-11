package pattern.strategy.adventure;

public class Axe extends Weapon
{
    public Axe()
    {
	super();
	setName("Axt");
	setBehaviour(new AxeBehaviour());
    }
}
