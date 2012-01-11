package pattern.strategy.adventure;

public abstract class Character
{
    protected String name;
    protected Weapon weapon;

    public Character()
    {
	setName("Der Namenlose");
	setWeapon(new Fists());
    }

    public void setName(String name)
    {
	this.name = name;
    }

    public void setWeapon(Weapon weapon)
    {
	this.weapon = weapon;
    }

    public String toString()
    {
	return name;
    }

    public void fight()
    {
	System.out.println(this + " " + weapon.fight() + " mit " + weapon);
    }

    public void fight(Character character)
    {
	System.out.println(this + " " + weapon.fight() + " " + character + " mit " + weapon);
    }
}
