/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Project/Maven2/JavaApp/src/main/java/${packagePath}/${mainClassName}.java to edit this template
 */

package com.mycompany.tpjunit;

public class Noeud {

    private int valeur;
    private Noeud suivant;

    public Noeud(int v, Noeud s) {
        valeur = v;
        suivant = s;
    }

    public void SetValeur(int valeur) {
        this.valeur = valeur;
    }

    public int GetValeur() {
        return valeur;
    }

    public void SetSuivant(Noeud suivant) {
        this.suivant = suivant;
    }

    public Noeud GetSuivant() {
        return suivant;
    }

    public void ajouterSuivant(int valeur) {
        if (this.suivant != NULL) {
            this.suivant.ajouterSuivant(valeur);
        }
        else {
            this.suivant = new Noeud(valeur, NULL);
        }
    }
    
    
}