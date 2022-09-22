<?php

/* AdminBundle:CtCarteGrise:index.html.twig */
class __TwigTemplate_df7f33f1fd68b2c71695f238befac437a0afb85a9e50c29a1523839d0c2919c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtCarteGrise:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backoffice/base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1c227a48068dc4698b6881d42b14231435fae2e81e26a490b03255be1d4e5164 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c227a48068dc4698b6881d42b14231435fae2e81e26a490b03255be1d4e5164->enter($__internal_1c227a48068dc4698b6881d42b14231435fae2e81e26a490b03255be1d4e5164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtCarteGrise:index.html.twig"));

        $__internal_5de1a3bb16728bc1419b07d229cb278c575fc4d68a3eb5abf16dd4f3185321f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5de1a3bb16728bc1419b07d229cb278c575fc4d68a3eb5abf16dd4f3185321f4->enter($__internal_5de1a3bb16728bc1419b07d229cb278c575fc4d68a3eb5abf16dd4f3185321f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtCarteGrise:index.html.twig"));

        // line 5
        $context["menu_carte_grise"] = true;
        // line 6
        $context["menu_carte_grise_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c227a48068dc4698b6881d42b14231435fae2e81e26a490b03255be1d4e5164->leave($__internal_1c227a48068dc4698b6881d42b14231435fae2e81e26a490b03255be1d4e5164_prof);

        
        $__internal_5de1a3bb16728bc1419b07d229cb278c575fc4d68a3eb5abf16dd4f3185321f4->leave($__internal_5de1a3bb16728bc1419b07d229cb278c575fc4d68a3eb5abf16dd4f3185321f4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f1f649f3392f55b8bfc2f1b84df4a68452323a7a19096d50217512e04b137fe3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1f649f3392f55b8bfc2f1b84df4a68452323a7a19096d50217512e04b137fe3->enter($__internal_f1f649f3392f55b8bfc2f1b84df4a68452323a7a19096d50217512e04b137fe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e27ccbbced0948557e9885fc465b2731120d36643ceae653d7b5d8200320655a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e27ccbbced0948557e9885fc465b2731120d36643ceae653d7b5d8200320655a->enter($__internal_e27ccbbced0948557e9885fc465b2731120d36643ceae653d7b5d8200320655a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des cartes grise ";
        
        $__internal_e27ccbbced0948557e9885fc465b2731120d36643ceae653d7b5d8200320655a->leave($__internal_e27ccbbced0948557e9885fc465b2731120d36643ceae653d7b5d8200320655a_prof);

        
        $__internal_f1f649f3392f55b8bfc2f1b84df4a68452323a7a19096d50217512e04b137fe3->leave($__internal_f1f649f3392f55b8bfc2f1b84df4a68452323a7a19096d50217512e04b137fe3_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_1a2e6166c43dff35cdb77538deaedab00d35be02c134c041a8e52acbe67d6b90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a2e6166c43dff35cdb77538deaedab00d35be02c134c041a8e52acbe67d6b90->enter($__internal_1a2e6166c43dff35cdb77538deaedab00d35be02c134c041a8e52acbe67d6b90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_19c2a5b465b2039022bb3c0cdf42b6e0badaaf946523acba098897e5c0dcd1b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19c2a5b465b2039022bb3c0cdf42b6e0badaaf946523acba098897e5c0dcd1b1->enter($__internal_19c2a5b465b2039022bb3c0cdf42b6e0badaaf946523acba098897e5c0dcd1b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 10
            echo "        <div class=\"callout callout-success\">
            ";
            // line 11
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 15
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 16
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    
    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["messages"]) {
            // line 21
            echo "        <div class=\"callout callout-";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">
            ";
            // line 22
            echo twig_escape_filter($this->env, $context["messages"], "html", null, true);
            echo " <br />
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"box\">
                <div class=\"box-header\">                    
                    <div class=\"list-count\">
                        <span class=\"title-count-text\"> TOTAL: </span><span class=\"title-count\"></span>
                    </div>
                </div>

                ";
        // line 36
        echo "                <div class=\"row add-btn-top-list\">
                    <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carte_grise_new");
        echo "\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer une carte grise
                        </button>
                    </a>
                </div>
                
                <form action=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carte_grise_delete_group");
        echo "\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-carte-grise\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                                 <tr>
                                     <th></th>
                                     <th>Immatriculation</th>
                                     <th>Nom</th>
                                     ";
        // line 54
        echo "                                     <th>Date vignette</th>
                                     <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["carte_grises"] ?? $this->getContext($context, "carte_grises")));
        foreach ($context['_seq'] as $context["_key"] => $context["carte_grise"]) {
            // line 60
            echo "                                    <tr>
                                        <td>
                                            <input type=\"checkbox\" value=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["carte_grise"], "id", array()), "html", null, true);
            echo "\" name=\"delete[]\" />
                                        </td>
                                        <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["carte_grise"], "cgImmatriculation", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["carte_grise"], "cgNom", array()), "html", null, true);
            echo "</td>
                                        ";
            // line 67
            echo "                                        <td>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["carte_grise"], "cgDateVignette", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                                        <td>
                                            <a class=\"btn btn-primary\" title=\"Modifier\"
                                               href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carte_grise_edit", array("id" => $this->getAttribute($context["carte_grise"], "id", array()))), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-edit\"></i>
                                            </a>
                                            <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                               href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("carte_grise_delete", array("id" => $this->getAttribute($context["carte_grise"], "id", array()))), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-trash\"></i>
                                            </a>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['carte_grise'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "                            </tbody>
                        </table>

                        ";
        // line 84
        echo "                        <a href=\"#\">
                            <button type=\"submit\" name=\"_group_delete\" class=\"btn btn-danger delete-btn\">
                                <i class=\"fa fa-trash\"></i>
                                Supprimer la sélection
                            </button>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_19c2a5b465b2039022bb3c0cdf42b6e0badaaf946523acba098897e5c0dcd1b1->leave($__internal_19c2a5b465b2039022bb3c0cdf42b6e0badaaf946523acba098897e5c0dcd1b1_prof);

        
        $__internal_1a2e6166c43dff35cdb77538deaedab00d35be02c134c041a8e52acbe67d6b90->leave($__internal_1a2e6166c43dff35cdb77538deaedab00d35be02c134c041a8e52acbe67d6b90_prof);

    }

    // line 97
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_51f9250080c7fadd383676a7b1759a032742c7fa9915d9596d7774eff380b061 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51f9250080c7fadd383676a7b1759a032742c7fa9915d9596d7774eff380b061->enter($__internal_51f9250080c7fadd383676a7b1759a032742c7fa9915d9596d7774eff380b061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3bc47f3b8cb353a868d836c118b53208f45fb30be51862b5fc206675269fdeb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bc47f3b8cb353a868d836c118b53208f45fb30be51862b5fc206675269fdeb3->enter($__internal_3bc47f3b8cb353a868d836c118b53208f45fb30be51862b5fc206675269fdeb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 98
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-carte-grise').DataTable(
            {
                \"order\": [[ 0, \"desc\" ]],
                \"bProcessing\": true,
                \"bFilter\": true,
                \"oLanguage\": {
                    \"sZeroRecords\": \"Aucun enregistrement correspondant trouvé\",
                    \"sProcessing\": \"Traitement...\",
                    \"oPaginate\": {
                        \"sPrevious\": \"Précédente\", // This is the link to the previous page
                        \"sNext\": \"Suivante\", // This is the link to the next page
                    },
                    \"sInfoFiltered\":   \"(filtré à partir de _MAX_ entrées)\",
                    \"sInfoEmpty\":      \"afficher de 0 à 0 sur 0 entrées\",
                    \"sSearch\": \"Filtrer: \",
                    \"sLengthMenu\": \"Afficher _MENU_ enregistrement par page\",
                    \"sEmptyTable\": \"Aucune carte grise trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });            
    </script>
";
        
        $__internal_3bc47f3b8cb353a868d836c118b53208f45fb30be51862b5fc206675269fdeb3->leave($__internal_3bc47f3b8cb353a868d836c118b53208f45fb30be51862b5fc206675269fdeb3_prof);

        
        $__internal_51f9250080c7fadd383676a7b1759a032742c7fa9915d9596d7774eff380b061->leave($__internal_51f9250080c7fadd383676a7b1759a032742c7fa9915d9596d7774eff380b061_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtCarteGrise:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 98,  247 => 97,  226 => 84,  221 => 80,  209 => 74,  202 => 70,  195 => 67,  191 => 65,  187 => 64,  182 => 62,  178 => 60,  174 => 59,  167 => 54,  156 => 45,  145 => 37,  142 => 36,  130 => 25,  121 => 22,  116 => 21,  112 => 20,  109 => 19,  100 => 16,  97 => 15,  92 => 14,  83 => 11,  80 => 10,  75 => 9,  66 => 8,  47 => 3,  37 => 1,  35 => 6,  33 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'backoffice/base_admin.html.twig' %}

{% block title %}{{ parent() }} Liste des cartes grise {% endblock %}

{% set menu_carte_grise      = true %}
{% set menu_carte_grise_list = true %}

{% block body %}
    {% for flashMessage in app.session.flashbag.get('success') %}
        <div class=\"callout callout-success\">
            {{ flashMessage }}
        </div>
    {% endfor %}
    {% for flashMessage in app.session.flashbag.get('error') %}
        <div class=\"callout callout-danger\">
            {{ flashMessage }}
        </div>
    {% endfor %}
    
    {% for key, messages in app.session.flashbag.all() %}
        <div class=\"callout callout-{{ key }}\">
            {{ messages }} <br />
        </div>
    {% endfor %}
    
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"box\">
                <div class=\"box-header\">                    
                    <div class=\"list-count\">
                        <span class=\"title-count-text\"> TOTAL: </span><span class=\"title-count\"></span>
                    </div>
                </div>

                {# Bouton création #}
                <div class=\"row add-btn-top-list\">
                    <a href=\"{{ path('carte_grise_new') }}\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer une carte grise
                        </button>
                    </a>
                </div>
                
                <form action=\"{{ path('carte_grise_delete_group') }}\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-carte-grise\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                                 <tr>
                                     <th></th>
                                     <th>Immatriculation</th>
                                     <th>Nom</th>
                                     {#<th>Prénom</th>#}
                                     <th>Date vignette</th>
                                     <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for carte_grise in carte_grises %}
                                    <tr>
                                        <td>
                                            <input type=\"checkbox\" value=\"{{ carte_grise.id }}\" name=\"delete[]\" />
                                        </td>
                                        <td>{{ carte_grise.cgImmatriculation }}</td>
                                        <td>{{ carte_grise.cgNom }}</td>
                                        {#<td>{{ carte_grise.cgPrenom }}</td>#}
                                        <td>{{ carte_grise.cgDateVignette|date('d/m/Y') }}</td>
                                        <td>
                                            <a class=\"btn btn-primary\" title=\"Modifier\"
                                               href=\"{{ path('carte_grise_edit', { 'id': carte_grise.id }) }}\">
                                                <i class=\"fa fa-edit\"></i>
                                            </a>
                                            <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                               href=\"{{ path('carte_grise_delete', { 'id': carte_grise.id }) }}\">
                                                <i class=\"fa fa-trash\"></i>
                                            </a>
                                        </td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>

                        {# Bouton suppression #}
                        <a href=\"#\">
                            <button type=\"submit\" name=\"_group_delete\" class=\"btn btn-danger delete-btn\">
                                <i class=\"fa fa-trash\"></i>
                                Supprimer la sélection
                            </button>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    
    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-carte-grise').DataTable(
            {
                \"order\": [[ 0, \"desc\" ]],
                \"bProcessing\": true,
                \"bFilter\": true,
                \"oLanguage\": {
                    \"sZeroRecords\": \"Aucun enregistrement correspondant trouvé\",
                    \"sProcessing\": \"Traitement...\",
                    \"oPaginate\": {
                        \"sPrevious\": \"Précédente\", // This is the link to the previous page
                        \"sNext\": \"Suivante\", // This is the link to the next page
                    },
                    \"sInfoFiltered\":   \"(filtré à partir de _MAX_ entrées)\",
                    \"sInfoEmpty\":      \"afficher de 0 à 0 sur 0 entrées\",
                    \"sSearch\": \"Filtrer: \",
                    \"sLengthMenu\": \"Afficher _MENU_ enregistrement par page\",
                    \"sEmptyTable\": \"Aucune carte grise trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });            
    </script>
{% endblock %}
", "AdminBundle:CtCarteGrise:index.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtCarteGrise/index.html.twig");
    }
}
