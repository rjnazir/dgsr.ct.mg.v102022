<?php

/* @Admin/CtMotifTarif/index.html.twig */
class __TwigTemplate_382a8d5ba006a9c512e04490d367004f278fbbc44a38761a25cea767c6f29910 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtMotifTarif/index.html.twig", 1);
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
        $__internal_7b5e40b5dae06d598c4758aa7866bb3de4a459fb2ec043b60f5097a8b2e43589 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b5e40b5dae06d598c4758aa7866bb3de4a459fb2ec043b60f5097a8b2e43589->enter($__internal_7b5e40b5dae06d598c4758aa7866bb3de4a459fb2ec043b60f5097a8b2e43589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtMotifTarif/index.html.twig"));

        $__internal_04d14bc0efdee3eda68b077473bed15f42e415a277275f5562d85c3d6b84ae30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04d14bc0efdee3eda68b077473bed15f42e415a277275f5562d85c3d6b84ae30->enter($__internal_04d14bc0efdee3eda68b077473bed15f42e415a277275f5562d85c3d6b84ae30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtMotifTarif/index.html.twig"));

        // line 5
        $context["menu_motif"] = true;
        // line 6
        $context["menu_motif_tarif"] = true;
        // line 7
        $context["menu_motif_tarif_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b5e40b5dae06d598c4758aa7866bb3de4a459fb2ec043b60f5097a8b2e43589->leave($__internal_7b5e40b5dae06d598c4758aa7866bb3de4a459fb2ec043b60f5097a8b2e43589_prof);

        
        $__internal_04d14bc0efdee3eda68b077473bed15f42e415a277275f5562d85c3d6b84ae30->leave($__internal_04d14bc0efdee3eda68b077473bed15f42e415a277275f5562d85c3d6b84ae30_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fc0d6370afa4ea1ee4d0ae27bea7889a8b0e50a6260768dcbdbf01a0370f9bc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc0d6370afa4ea1ee4d0ae27bea7889a8b0e50a6260768dcbdbf01a0370f9bc7->enter($__internal_fc0d6370afa4ea1ee4d0ae27bea7889a8b0e50a6260768dcbdbf01a0370f9bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_407cc12f9da4c7b932f831d465309ece3906726d1f8888f46c7dcf06319c0dd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_407cc12f9da4c7b932f831d465309ece3906726d1f8888f46c7dcf06319c0dd1->enter($__internal_407cc12f9da4c7b932f831d465309ece3906726d1f8888f46c7dcf06319c0dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des motifs ";
        
        $__internal_407cc12f9da4c7b932f831d465309ece3906726d1f8888f46c7dcf06319c0dd1->leave($__internal_407cc12f9da4c7b932f831d465309ece3906726d1f8888f46c7dcf06319c0dd1_prof);

        
        $__internal_fc0d6370afa4ea1ee4d0ae27bea7889a8b0e50a6260768dcbdbf01a0370f9bc7->leave($__internal_fc0d6370afa4ea1ee4d0ae27bea7889a8b0e50a6260768dcbdbf01a0370f9bc7_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_822e99644ab3c607c2118dae35ed44fdc8bd0e87a8c08e0cb32bc1697d4d448f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_822e99644ab3c607c2118dae35ed44fdc8bd0e87a8c08e0cb32bc1697d4d448f->enter($__internal_822e99644ab3c607c2118dae35ed44fdc8bd0e87a8c08e0cb32bc1697d4d448f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_63b087da1a769cb5a5acb7a282a36f6e1c05ad89fbcebfba5d57bee10feca0be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63b087da1a769cb5a5acb7a282a36f6e1c05ad89fbcebfba5d57bee10feca0be->enter($__internal_63b087da1a769cb5a5acb7a282a36f6e1c05ad89fbcebfba5d57bee10feca0be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "        <div class=\"callout callout-success\">
            ";
            // line 13
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 17
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 18
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["messages"]) {
            // line 23
            echo "        <div class=\"callout callout-";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">
            ";
            // line 24
            echo twig_escape_filter($this->env, $context["messages"], "html", null, true);
            echo " <br />
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
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
        // line 38
        echo "                <div class=\"row add-btn-top-list\">
                    <a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("motif_tarif_new");
        echo "\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un tarif du motif
                        </button>
                    </a>
                </div>

                <form action=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("motif_tarif_delete_group");
        echo "\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-motif\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Nom</th>
                                <th>Prix</th>
                                <th>Ann&eacute;e</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["motifs"] ?? $this->getContext($context, "motifs")));
        foreach ($context['_seq'] as $context["_key"] => $context["motif"]) {
            // line 61
            echo "                                <tr>
                                    <td>
                                        <input type=\"checkbox\" value=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["motif"], "id", array()), "html", null, true);
            echo "\" name=\"delete[]\" />
                                    </td>
                                    <td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["motif"], "mtfLibelle", array()), "html", null, true);
            echo "</td>
                                    <td>
                                        ";
            // line 67
            if ($this->getAttribute($context["motif"], "mtfTrfPrix", array(), "any", true, true)) {
                // line 68
                echo "                                            ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["motif"], "mtfTrfPrix", array()), "html", null, true);
                echo "
                                        ";
            }
            // line 70
            echo "                                    </td>
                                    <td>
                                        ";
            // line 72
            if ($this->getAttribute($context["motif"], "mtfTrfDate", array(), "any", true, true)) {
                // line 73
                echo "                                            ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["motif"], "mtfTrfDate", array()), "html", null, true);
                echo "
                                        ";
            }
            // line 75
            echo "                                    </td>
                                    <td>
                                        <a class=\"btn btn-primary\" title=\"Modifier\"
                                           href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("motif_tarif_edit", array("id" => $this->getAttribute($context["motif"], "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-edit\"></i>
                                        </a>
                                        <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                           href=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("motif_tarif_delete", array("id" => $this->getAttribute($context["motif"], "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-trash\"></i>
                                        </a>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['motif'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "                            </tbody>
                        </table>

                        ";
        // line 92
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
        
        $__internal_63b087da1a769cb5a5acb7a282a36f6e1c05ad89fbcebfba5d57bee10feca0be->leave($__internal_63b087da1a769cb5a5acb7a282a36f6e1c05ad89fbcebfba5d57bee10feca0be_prof);

        
        $__internal_822e99644ab3c607c2118dae35ed44fdc8bd0e87a8c08e0cb32bc1697d4d448f->leave($__internal_822e99644ab3c607c2118dae35ed44fdc8bd0e87a8c08e0cb32bc1697d4d448f_prof);

    }

    // line 105
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_31466ac73b51975b815cd0d3eb75bfa1d4f90157fec34047626e0ac355312a40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31466ac73b51975b815cd0d3eb75bfa1d4f90157fec34047626e0ac355312a40->enter($__internal_31466ac73b51975b815cd0d3eb75bfa1d4f90157fec34047626e0ac355312a40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b7c7dc27f73f49295df641a87f3abbc94f95c1ae3a68734aabf5ef299212fc4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7c7dc27f73f49295df641a87f3abbc94f95c1ae3a68734aabf5ef299212fc4e->enter($__internal_b7c7dc27f73f49295df641a87f3abbc94f95c1ae3a68734aabf5ef299212fc4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 106
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-motif').DataTable(
            {
                \"order\": [[ 1, \"desc\" ]],
                \"bProcessing\": true,
                \"bFilter\": true,
                \"oLanguage\": {
                    \"sProcessing\": \"Traitement...\",
                    \"oPaginate\": {
                        \"sPrevious\": \"Précédente\", // This is the link to the previous page
                        \"sNext\": \"Suivante\", // This is the link to the next page
                    },
                    \"sSearch\": \"Filtrer: \",
                    \"sLengthMenu\": \"Afficher _MENU_ enregistrement par page\",
                    \"sEmptyTable\": \"Aucune motif trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });
    </script>
";
        
        $__internal_b7c7dc27f73f49295df641a87f3abbc94f95c1ae3a68734aabf5ef299212fc4e->leave($__internal_b7c7dc27f73f49295df641a87f3abbc94f95c1ae3a68734aabf5ef299212fc4e_prof);

        
        $__internal_31466ac73b51975b815cd0d3eb75bfa1d4f90157fec34047626e0ac355312a40->leave($__internal_31466ac73b51975b815cd0d3eb75bfa1d4f90157fec34047626e0ac355312a40_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtMotifTarif/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 106,  262 => 105,  241 => 92,  236 => 88,  224 => 82,  217 => 78,  212 => 75,  206 => 73,  204 => 72,  200 => 70,  194 => 68,  192 => 67,  187 => 65,  182 => 63,  178 => 61,  174 => 60,  158 => 47,  147 => 39,  144 => 38,  132 => 27,  123 => 24,  118 => 23,  114 => 22,  111 => 21,  102 => 18,  99 => 17,  94 => 16,  85 => 13,  82 => 12,  77 => 11,  68 => 10,  49 => 3,  39 => 1,  37 => 7,  35 => 6,  33 => 5,  11 => 1,);
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

{% block title %}{{ parent() }} Liste des motifs {% endblock %}

{% set menu_motif            = true %}
{% set menu_motif_tarif      = true %}
{% set menu_motif_tarif_list = true %}


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
                    <a href=\"{{ path('motif_tarif_new') }}\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un tarif du motif
                        </button>
                    </a>
                </div>

                <form action=\"{{ path('motif_tarif_delete_group') }}\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-motif\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Nom</th>
                                <th>Prix</th>
                                <th>Ann&eacute;e</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for motif in motifs %}
                                <tr>
                                    <td>
                                        <input type=\"checkbox\" value=\"{{ motif.id }}\" name=\"delete[]\" />
                                    </td>
                                    <td>{{ motif.mtfLibelle }}</td>
                                    <td>
                                        {% if motif.mtfTrfPrix is defined %}
                                            {{ motif.mtfTrfPrix }}
                                        {% endif %}
                                    </td>
                                    <td>
                                        {% if motif.mtfTrfDate is defined %}
                                            {{ motif.mtfTrfDate }}
                                        {% endif %}
                                    </td>
                                    <td>
                                        <a class=\"btn btn-primary\" title=\"Modifier\"
                                           href=\"{{ path('motif_tarif_edit', { 'id': motif.id }) }}\">
                                            <i class=\"fa fa-edit\"></i>
                                        </a>
                                        <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                           href=\"{{ path('motif_tarif_delete', { 'id': motif.id }) }}\">
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
            \$('#list-motif').DataTable(
            {
                \"order\": [[ 1, \"desc\" ]],
                \"bProcessing\": true,
                \"bFilter\": true,
                \"oLanguage\": {
                    \"sProcessing\": \"Traitement...\",
                    \"oPaginate\": {
                        \"sPrevious\": \"Précédente\", // This is the link to the previous page
                        \"sNext\": \"Suivante\", // This is the link to the next page
                    },
                    \"sSearch\": \"Filtrer: \",
                    \"sLengthMenu\": \"Afficher _MENU_ enregistrement par page\",
                    \"sEmptyTable\": \"Aucune motif trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });
    </script>
{% endblock %}
", "@Admin/CtMotifTarif/index.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtMotifTarif\\index.html.twig");
    }
}
