package pattern.strategy.adventure;

public class Fists extends Weapon
{
    public Fists()
    {
	setName("Faust");
	setBehaviour(new FistBehaviour());
    }
}
