/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package view;

import java.beans.PropertyChangeListener;
import java.beans.PropertyChangeSupport;
import java.io.Serializable;
import javax.persistence.Basic;
import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.ManyToOne;
import javax.persistence.NamedQueries;
import javax.persistence.NamedQuery;
import javax.persistence.Table;
import javax.persistence.Transient;

/**
 *
 * @author luisc
 */
@Entity
@Table(name = "conserto", catalog = "db_relatorio_relojoeiro", schema = "")
public class Conserto implements Serializable {

    @Transient
    private PropertyChangeSupport changeSupport = new PropertyChangeSupport(this);

    private static final long serialVersionUID = 1L;
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Basic(optional = false)
    @Column(name = "idconserto")
    private Integer idconserto;
    @Column(name = "data")
    private String data;
    @Column(name = "horario")
    private String horario;
    
    @ManyToOne
    private Cliente cliente;
    @ManyToOne
    private Relojoeiro relojoeiro;

    public Conserto() {
    }

    public Conserto(Integer idconserto) {
        this.idconserto = idconserto;
    }

    public Integer getIdconserto() {
        return idconserto;
    }

    public void setIdconserto(Integer idconserto) {
        Integer oldIdconserto = this.idconserto;
        this.idconserto = idconserto;
        changeSupport.firePropertyChange("idconserto", oldIdconserto, idconserto);
    }

    public String getData() {
        return data;
    }

    public void setData(String data) {
        String oldData = this.data;
        this.data = data;
        changeSupport.firePropertyChange("data", oldData, data);
    }

    public String getHorario() {
        return horario;
    }

    public void setHorario(String horario) {
        String oldHorario = this.horario;
        this.horario = horario;
        changeSupport.firePropertyChange("horario", oldHorario, horario);
    }

    public Cliente getCliente() {
        return cliente;
    }

    public void setCliente(Cliente cliente) {
        Cliente oldCliente = this.cliente;
        this.cliente = cliente;
        changeSupport.firePropertyChange("cliente", oldCliente, cliente);
    }

    public Relojoeiro getRelojoeiro() {
        return relojoeiro;
    }

    public void setRelojoeiro(Relojoeiro relojoeiro) {
        Relojoeiro oldRelojoeiro = this.relojoeiro;
        this.relojoeiro = relojoeiro;
        changeSupport.firePropertyChange("relojoeiro", oldRelojoeiro, relojoeiro);
    }
    
    @Override
    public int hashCode() {
        int hash = 0;
        hash += (idconserto != null ? idconserto.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof Conserto)) {
            return false;
        }
        Conserto other = (Conserto) object;
        if ((this.idconserto == null && other.idconserto != null) || (this.idconserto != null && !this.idconserto.equals(other.idconserto))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "view.Conserto[ idconserto=" + idconserto + " ]";
    }

    public void addPropertyChangeListener(PropertyChangeListener listener) {
        changeSupport.addPropertyChangeListener(listener);
    }

    public void removePropertyChangeListener(PropertyChangeListener listener) {
        changeSupport.removePropertyChangeListener(listener);
    }
    
}
