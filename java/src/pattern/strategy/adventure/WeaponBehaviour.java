package pattern.strategy.adventure;

public abstract class WeaponBehaviour
{
    protected String behaviour;

    public void setBehaviour(String behaviour)
    {
	this.behaviour = behaviour;
    }

    public String toString()
    {
	return behaviour;
    }
}
