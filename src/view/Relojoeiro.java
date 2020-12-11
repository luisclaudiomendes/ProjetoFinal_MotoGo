/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package view;

import java.beans.PropertyChangeListener;
import java.beans.PropertyChangeSupport;
import java.io.Serializable;
import java.util.ArrayList;
import java.util.List;
import javax.persistence.Basic;
import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.NamedQueries;
import javax.persistence.NamedQuery;
import javax.persistence.OneToMany;
import javax.persistence.Table;
import javax.persistence.Transient;

/**
 *
 * @author luisc
 */
@Entity
@Table(name = "relojoeiro", catalog = "db_relatorio_relojoeiro", schema = "")
public class Relojoeiro implements Serializable {

    @Transient
    private PropertyChangeSupport changeSupport = new PropertyChangeSupport(this);

    private static final long serialVersionUID = 1L;
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Basic(optional = false)
    @Column(name = "idrelojoeiro")
    private Integer idrelojoeiro;
    @Column(name = "nome")
    private String nome;
    @Column(name = "cpf")
    private String cpf;

    @OneToMany(mappedBy = "relojoeiro")
    private List<Conserto> consertos = new ArrayList<>();
    
    public Relojoeiro() {
    }

    public Relojoeiro(Integer idrelojoeiro) {
        this.idrelojoeiro = idrelojoeiro;
    }

    public Integer getIdrelojoeiro() {
        return idrelojoeiro;
    }

    public void setIdrelojoeiro(Integer idrelojoeiro) {
        Integer oldIdrelojoeiro = this.idrelojoeiro;
        this.idrelojoeiro = idrelojoeiro;
        changeSupport.firePropertyChange("idrelojoeiro", oldIdrelojoeiro, idrelojoeiro);
    }

    public String getNome() {
        return nome;
    }

    public void setNome(String nome) {
        String oldNome = this.nome;
        this.nome = nome;
        changeSupport.firePropertyChange("nome", oldNome, nome);
    }

    public List<Conserto> getConsertos() {
        return consertos;
    }

    public void setConsertos(List<Conserto> consertos) {
        this.consertos = consertos;
    }
    
    public String getCpf() {
        return cpf;
    }

    public void setCpf(String cpf) {
        String oldCpf = this.cpf;
        this.cpf = cpf;
        changeSupport.firePropertyChange("cpf", oldCpf, cpf);
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (idrelojoeiro != null ? idrelojoeiro.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof Relojoeiro)) {
            return false;
        }
        Relojoeiro other = (Relojoeiro) object;
        if ((this.idrelojoeiro == null && other.idrelojoeiro != null) || (this.idrelojoeiro != null && !this.idrelojoeiro.equals(other.idrelojoeiro))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return nome;
    }

    public void addPropertyChangeListener(PropertyChangeListener listener) {
        changeSupport.addPropertyChangeListener(listener);
    }

    public void removePropertyChangeListener(PropertyChangeListener listener) {
        changeSupport.removePropertyChangeListener(listener);
    }
    
}
