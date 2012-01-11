package pattern.strategy.adventure;

public abstract class Weapon
{
    protected String name;
    protected WeaponBehaviour behaviour;

    public void setName(String name)
    {
	this.name = name;
    }

    public void setBehaviour(WeaponBehaviour behaviour)
    {
	this.behaviour = behaviour;
    }

    public String fight()
    {
	return behaviour.toString();
    }

    public String toString()
    {
	return name;
    }
}
