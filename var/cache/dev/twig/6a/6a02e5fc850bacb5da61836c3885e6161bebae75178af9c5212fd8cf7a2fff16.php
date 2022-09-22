<?php

/* @Admin/CtTypeVisite/index.html.twig */
class __TwigTemplate_7ef32eb39fc1acd8c94c2e40f645c5c56b838cde6f55f98b34179176cc6bbf2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "@Admin/CtTypeVisite/index.html.twig", 1);
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
        $__internal_26f4876127bcbf8ae689e354fc8a14a8529cb3acfc68b7ad62e1b2dc1b9f2898 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26f4876127bcbf8ae689e354fc8a14a8529cb3acfc68b7ad62e1b2dc1b9f2898->enter($__internal_26f4876127bcbf8ae689e354fc8a14a8529cb3acfc68b7ad62e1b2dc1b9f2898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtTypeVisite/index.html.twig"));

        $__internal_b826976c29c8c7bd22f4d001a4d654655874b654db0965d5bd30b8ed7f6776e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b826976c29c8c7bd22f4d001a4d654655874b654db0965d5bd30b8ed7f6776e9->enter($__internal_b826976c29c8c7bd22f4d001a4d654655874b654db0965d5bd30b8ed7f6776e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Admin/CtTypeVisite/index.html.twig"));

        // line 5
        $context["menu_visite"] = true;
        // line 6
        $context["menu_type_visite"] = true;
        // line 7
        $context["menu_type_visite_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26f4876127bcbf8ae689e354fc8a14a8529cb3acfc68b7ad62e1b2dc1b9f2898->leave($__internal_26f4876127bcbf8ae689e354fc8a14a8529cb3acfc68b7ad62e1b2dc1b9f2898_prof);

        
        $__internal_b826976c29c8c7bd22f4d001a4d654655874b654db0965d5bd30b8ed7f6776e9->leave($__internal_b826976c29c8c7bd22f4d001a4d654655874b654db0965d5bd30b8ed7f6776e9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dded76f683da0ab02d39449f831f005d85a83805572d799fb61d1c21538af655 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dded76f683da0ab02d39449f831f005d85a83805572d799fb61d1c21538af655->enter($__internal_dded76f683da0ab02d39449f831f005d85a83805572d799fb61d1c21538af655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ec40e569080993a147bf471c9351937e13ab4cee9d9999603700398aeb085bf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec40e569080993a147bf471c9351937e13ab4cee9d9999603700398aeb085bf9->enter($__internal_ec40e569080993a147bf471c9351937e13ab4cee9d9999603700398aeb085bf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des types d' anomalies ";
        
        $__internal_ec40e569080993a147bf471c9351937e13ab4cee9d9999603700398aeb085bf9->leave($__internal_ec40e569080993a147bf471c9351937e13ab4cee9d9999603700398aeb085bf9_prof);

        
        $__internal_dded76f683da0ab02d39449f831f005d85a83805572d799fb61d1c21538af655->leave($__internal_dded76f683da0ab02d39449f831f005d85a83805572d799fb61d1c21538af655_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a9d14aecabc2f89f15c8079209c6e0d488401256819af5334c836fb20534453 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a9d14aecabc2f89f15c8079209c6e0d488401256819af5334c836fb20534453->enter($__internal_7a9d14aecabc2f89f15c8079209c6e0d488401256819af5334c836fb20534453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d134daef507613f65999b6b707d046c259b8c3473477d210a64762a764b30e10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d134daef507613f65999b6b707d046c259b8c3473477d210a64762a764b30e10->enter($__internal_d134daef507613f65999b6b707d046c259b8c3473477d210a64762a764b30e10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 11
            echo "        <div class=\"callout callout-success\">
            ";
            // line 12
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 16
            echo "        <div class=\"callout callout-danger\">
            ";
            // line 17
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["messages"]) {
            // line 22
            echo "        <div class=\"callout callout-";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">
            ";
            // line 23
            echo twig_escape_filter($this->env, $context["messages"], "html", null, true);
            echo " <br />
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
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
        // line 37
        echo "                <div class=\"row add-btn-top-list\">
                    <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_visite_new");
        echo "\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un type de visite
                        </button>
                    </a>
                </div>

                <form action=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_visite_delete_group");
        echo "\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-type-visite\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Libellé</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["type_visites"] ?? $this->getContext($context, "type_visites")));
        foreach ($context['_seq'] as $context["_key"] => $context["type_visite"]) {
            // line 58
            echo "                                    <tr>
                                        <td>
                                            <input type=\"checkbox\" value=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["type_visite"], "id", array()), "html", null, true);
            echo "\" name=\"delete[]\" />
                                        </td>
                                        <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["type_visite"], "tpvLibelle", array()), "html", null, true);
            echo "</td>
                                        <td>
                                            <a class=\"btn btn-primary\" title=\"Modifier\"
                                               href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_visite_edit", array("id" => $this->getAttribute($context["type_visite"], "id", array()))), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-edit\"></i>
                                            </a>
                                            <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                               href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("type_visite_delete", array("id" => $this->getAttribute($context["type_visite"], "id", array()))), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-trash\"></i>
                                            </a>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type_visite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                            </tbody>
                        </table>

                        ";
        // line 79
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
        
        $__internal_d134daef507613f65999b6b707d046c259b8c3473477d210a64762a764b30e10->leave($__internal_d134daef507613f65999b6b707d046c259b8c3473477d210a64762a764b30e10_prof);

        
        $__internal_7a9d14aecabc2f89f15c8079209c6e0d488401256819af5334c836fb20534453->leave($__internal_7a9d14aecabc2f89f15c8079209c6e0d488401256819af5334c836fb20534453_prof);

    }

    // line 92
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0ece6f152467ff6eea6e36b193a9e45450cb50d44a1b1901c3444f69ee2f2b8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ece6f152467ff6eea6e36b193a9e45450cb50d44a1b1901c3444f69ee2f2b8a->enter($__internal_0ece6f152467ff6eea6e36b193a9e45450cb50d44a1b1901c3444f69ee2f2b8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4db96280190fa0f64158a97735ed614a52d2d45b5f3bac97fae85316373b0599 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4db96280190fa0f64158a97735ed614a52d2d45b5f3bac97fae85316373b0599->enter($__internal_4db96280190fa0f64158a97735ed614a52d2d45b5f3bac97fae85316373b0599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 93
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-type-visite').DataTable(
            {
                \"order\": [[ 0, \"desc\" ]],
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
                    \"sEmptyTable\": \"Aucun type de visite trouvé\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });
    </script>
";
        
        $__internal_4db96280190fa0f64158a97735ed614a52d2d45b5f3bac97fae85316373b0599->leave($__internal_4db96280190fa0f64158a97735ed614a52d2d45b5f3bac97fae85316373b0599_prof);

        
        $__internal_0ece6f152467ff6eea6e36b193a9e45450cb50d44a1b1901c3444f69ee2f2b8a->leave($__internal_0ece6f152467ff6eea6e36b193a9e45450cb50d44a1b1901c3444f69ee2f2b8a_prof);

    }

    public function getTemplateName()
    {
        return "@Admin/CtTypeVisite/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 93,  236 => 92,  215 => 79,  210 => 75,  198 => 69,  191 => 65,  185 => 62,  180 => 60,  176 => 58,  172 => 57,  158 => 46,  147 => 38,  144 => 37,  132 => 26,  123 => 23,  118 => 22,  114 => 21,  111 => 20,  102 => 17,  99 => 16,  94 => 15,  85 => 12,  82 => 11,  77 => 10,  68 => 9,  49 => 3,  39 => 1,  37 => 7,  35 => 6,  33 => 5,  11 => 1,);
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

{% block title %}{{ parent() }} Liste des types d' anomalies {% endblock %}

{% set menu_visite           = true %}
{% set menu_type_visite      = true %}
{% set menu_type_visite_list = true %}

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
                    <a href=\"{{ path('type_visite_new') }}\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un type de visite
                        </button>
                    </a>
                </div>

                <form action=\"{{ path('type_visite_delete_group') }}\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-type-visite\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Libellé</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for type_visite in type_visites %}
                                    <tr>
                                        <td>
                                            <input type=\"checkbox\" value=\"{{ type_visite.id }}\" name=\"delete[]\" />
                                        </td>
                                        <td>{{ type_visite.tpvLibelle }}</td>
                                        <td>
                                            <a class=\"btn btn-primary\" title=\"Modifier\"
                                               href=\"{{ path('type_visite_edit', { 'id': type_visite.id }) }}\">
                                                <i class=\"fa fa-edit\"></i>
                                            </a>
                                            <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                               href=\"{{ path('type_visite_delete', { 'id': type_visite.id }) }}\">
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
            \$('#list-type-visite').DataTable(
            {
                \"order\": [[ 0, \"desc\" ]],
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
                    \"sEmptyTable\": \"Aucun type de visite trouvé\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });
    </script>
{% endblock %}
", "@Admin/CtTypeVisite/index.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle\\Resources\\views\\CtTypeVisite\\index.html.twig");
    }
}
