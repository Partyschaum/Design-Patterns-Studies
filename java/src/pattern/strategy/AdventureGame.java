package pattern.strategy;

import pattern.strategy.adventure.*;

public class AdventureGame
{
    public static void main(String[] args)
    {
	King king = new King();
	Queen queen = new Queen();
	Knight knight = new Knight();
	Troll troll = new Troll();

	king.fight();
	queen.fight();
	knight.fight();
	troll.fight();

	king.fight(troll);
	queen.fight(king);
	knight.fight(troll);
	troll.fight(king);
	king.setWeapon(new Fists());
	king.fight(troll);
    }
}
