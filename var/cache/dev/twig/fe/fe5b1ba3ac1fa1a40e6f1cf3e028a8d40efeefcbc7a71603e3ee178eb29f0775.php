<?php

/* AdminBundle:CtMarque:index.html.twig */
class __TwigTemplate_b572e8401ee7ed6a6fbdb94f91ae390bce3c99802a3f2ae98d479c18c8975784 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtMarque:index.html.twig", 1);
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
        $__internal_ec1d1b55ea0fd45e3bef2211f1cbbed1b21342b21eee3fe4f007864dffb6788e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec1d1b55ea0fd45e3bef2211f1cbbed1b21342b21eee3fe4f007864dffb6788e->enter($__internal_ec1d1b55ea0fd45e3bef2211f1cbbed1b21342b21eee3fe4f007864dffb6788e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtMarque:index.html.twig"));

        $__internal_f81016b979dd9d48d04de151b98035b0195890b914cf9ba87791695dc7a0de98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f81016b979dd9d48d04de151b98035b0195890b914cf9ba87791695dc7a0de98->enter($__internal_f81016b979dd9d48d04de151b98035b0195890b914cf9ba87791695dc7a0de98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtMarque:index.html.twig"));

        // line 5
        $context["menu_marque"] = true;
        // line 6
        $context["menu_marque_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec1d1b55ea0fd45e3bef2211f1cbbed1b21342b21eee3fe4f007864dffb6788e->leave($__internal_ec1d1b55ea0fd45e3bef2211f1cbbed1b21342b21eee3fe4f007864dffb6788e_prof);

        
        $__internal_f81016b979dd9d48d04de151b98035b0195890b914cf9ba87791695dc7a0de98->leave($__internal_f81016b979dd9d48d04de151b98035b0195890b914cf9ba87791695dc7a0de98_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d3b6611547e67bca50f2232e22bd4454b284fb162bc560bd5570f42cd79b1b98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3b6611547e67bca50f2232e22bd4454b284fb162bc560bd5570f42cd79b1b98->enter($__internal_d3b6611547e67bca50f2232e22bd4454b284fb162bc560bd5570f42cd79b1b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b0dfad76894d2887a0c232d9ad23816bbb365fd1655088dbf982f9cb7d887a70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0dfad76894d2887a0c232d9ad23816bbb365fd1655088dbf982f9cb7d887a70->enter($__internal_b0dfad76894d2887a0c232d9ad23816bbb365fd1655088dbf982f9cb7d887a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des marques ";
        
        $__internal_b0dfad76894d2887a0c232d9ad23816bbb365fd1655088dbf982f9cb7d887a70->leave($__internal_b0dfad76894d2887a0c232d9ad23816bbb365fd1655088dbf982f9cb7d887a70_prof);

        
        $__internal_d3b6611547e67bca50f2232e22bd4454b284fb162bc560bd5570f42cd79b1b98->leave($__internal_d3b6611547e67bca50f2232e22bd4454b284fb162bc560bd5570f42cd79b1b98_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_7e3c033842e9c59aebb06dec77381bc35cc6985559d78490ff9318f828f3f225 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e3c033842e9c59aebb06dec77381bc35cc6985559d78490ff9318f828f3f225->enter($__internal_7e3c033842e9c59aebb06dec77381bc35cc6985559d78490ff9318f828f3f225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cff5fb78a62a408ebe31b0efc0d940f1f47140d45b05dbd0b7dd4f0fcb1a8b56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cff5fb78a62a408ebe31b0efc0d940f1f47140d45b05dbd0b7dd4f0fcb1a8b56->enter($__internal_cff5fb78a62a408ebe31b0efc0d940f1f47140d45b05dbd0b7dd4f0fcb1a8b56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("marque_new");
        echo "\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer une marque
                        </button>
                    </a>
                </div>

                <form action=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("marque_delete_group");
        echo "\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-marque\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Libellé</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["marques"] ?? $this->getContext($context, "marques")));
        foreach ($context['_seq'] as $context["_key"] => $context["marque"]) {
            // line 57
            echo "                                <tr>
                                    <td>
                                        <input type=\"checkbox\" value=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["marque"], "id", array()), "html", null, true);
            echo "\" name=\"delete[]\" />
                                    </td>
                                    <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["marque"], "mrqLibelle", array()), "html", null, true);
            echo "</td>
                                    <td>
                                        <a class=\"btn btn-primary\" title=\"Modifier\"
                                           href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("marque_edit", array("id" => $this->getAttribute($context["marque"], "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-edit\"></i>
                                        </a>
                                        <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                           href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("marque_delete", array("id" => $this->getAttribute($context["marque"], "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-trash\"></i>
                                        </a>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['marque'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                            </tbody>
                        </table>

                        ";
        // line 78
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
        
        $__internal_cff5fb78a62a408ebe31b0efc0d940f1f47140d45b05dbd0b7dd4f0fcb1a8b56->leave($__internal_cff5fb78a62a408ebe31b0efc0d940f1f47140d45b05dbd0b7dd4f0fcb1a8b56_prof);

        
        $__internal_7e3c033842e9c59aebb06dec77381bc35cc6985559d78490ff9318f828f3f225->leave($__internal_7e3c033842e9c59aebb06dec77381bc35cc6985559d78490ff9318f828f3f225_prof);

    }

    // line 91
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8d5311dd832eb22960488b1b32334168fa35fb161a800544c7e451cd02df5d3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d5311dd832eb22960488b1b32334168fa35fb161a800544c7e451cd02df5d3a->enter($__internal_8d5311dd832eb22960488b1b32334168fa35fb161a800544c7e451cd02df5d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_43033375eedafbb8ceef3ff174afac7103919e3e6ba05ece68f1e0d2a8a001eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43033375eedafbb8ceef3ff174afac7103919e3e6ba05ece68f1e0d2a8a001eb->enter($__internal_43033375eedafbb8ceef3ff174afac7103919e3e6ba05ece68f1e0d2a8a001eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 92
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-marque').DataTable(
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
                    \"sEmptyTable\": \"Aucune marque trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });
    </script>
";
        
        $__internal_43033375eedafbb8ceef3ff174afac7103919e3e6ba05ece68f1e0d2a8a001eb->leave($__internal_43033375eedafbb8ceef3ff174afac7103919e3e6ba05ece68f1e0d2a8a001eb_prof);

        
        $__internal_8d5311dd832eb22960488b1b32334168fa35fb161a800544c7e451cd02df5d3a->leave($__internal_8d5311dd832eb22960488b1b32334168fa35fb161a800544c7e451cd02df5d3a_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtMarque:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 92,  234 => 91,  213 => 78,  208 => 74,  196 => 68,  189 => 64,  183 => 61,  178 => 59,  174 => 57,  170 => 56,  156 => 45,  145 => 37,  142 => 36,  130 => 25,  121 => 22,  116 => 21,  112 => 20,  109 => 19,  100 => 16,  97 => 15,  92 => 14,  83 => 11,  80 => 10,  75 => 9,  66 => 8,  47 => 3,  37 => 1,  35 => 6,  33 => 5,  11 => 1,);
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

{% block title %}{{ parent() }} Liste des marques {% endblock %}

{% set menu_marque      = true %}
{% set menu_marque_list = true %}

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
                    <a href=\"{{ path('marque_new') }}\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer une marque
                        </button>
                    </a>
                </div>

                <form action=\"{{ path('marque_delete_group') }}\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-marque\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Libellé</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for marque in marques %}
                                <tr>
                                    <td>
                                        <input type=\"checkbox\" value=\"{{ marque.id }}\" name=\"delete[]\" />
                                    </td>
                                    <td>{{ marque.mrqLibelle }}</td>
                                    <td>
                                        <a class=\"btn btn-primary\" title=\"Modifier\"
                                           href=\"{{ path('marque_edit', { 'id': marque.id }) }}\">
                                            <i class=\"fa fa-edit\"></i>
                                        </a>
                                        <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                           href=\"{{ path('marque_delete', { 'id': marque.id }) }}\">
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
            \$('#list-marque').DataTable(
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
                    \"sEmptyTable\": \"Aucune marque trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });
    </script>
{% endblock %}
", "AdminBundle:CtMarque:index.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtMarque/index.html.twig");
    }
}
