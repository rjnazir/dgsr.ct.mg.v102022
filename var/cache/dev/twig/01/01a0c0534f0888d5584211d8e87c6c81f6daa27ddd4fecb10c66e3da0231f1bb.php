<?php

/* AdminBundle:CtAnomalie:index.html.twig */
class __TwigTemplate_b89c3249b2a22a1f5107e58fbce541631477d1045ddba9117804564646683650 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtAnomalie:index.html.twig", 1);
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
        $__internal_f8a92c64102c83f5e4989766858997f5c4ee1925b01158feddf4991236bdd159 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8a92c64102c83f5e4989766858997f5c4ee1925b01158feddf4991236bdd159->enter($__internal_f8a92c64102c83f5e4989766858997f5c4ee1925b01158feddf4991236bdd159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtAnomalie:index.html.twig"));

        $__internal_4e1fa4fb56cd9d28426f70f5abcea7e9320a22b469cad685f82208d7607867dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e1fa4fb56cd9d28426f70f5abcea7e9320a22b469cad685f82208d7607867dc->enter($__internal_4e1fa4fb56cd9d28426f70f5abcea7e9320a22b469cad685f82208d7607867dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtAnomalie:index.html.twig"));

        // line 5
        $context["menu_anomalie"] = true;
        // line 6
        $context["menu_anomalie_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8a92c64102c83f5e4989766858997f5c4ee1925b01158feddf4991236bdd159->leave($__internal_f8a92c64102c83f5e4989766858997f5c4ee1925b01158feddf4991236bdd159_prof);

        
        $__internal_4e1fa4fb56cd9d28426f70f5abcea7e9320a22b469cad685f82208d7607867dc->leave($__internal_4e1fa4fb56cd9d28426f70f5abcea7e9320a22b469cad685f82208d7607867dc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cd4e7412da49003f1bf393572ba76a5d90c98c13bb92df7ee4e77bd08b8eea2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd4e7412da49003f1bf393572ba76a5d90c98c13bb92df7ee4e77bd08b8eea2f->enter($__internal_cd4e7412da49003f1bf393572ba76a5d90c98c13bb92df7ee4e77bd08b8eea2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_14607ce17a160a65c673acb0722ee35871a2fbcadce09c6cd6f3fdd0be1680bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14607ce17a160a65c673acb0722ee35871a2fbcadce09c6cd6f3fdd0be1680bc->enter($__internal_14607ce17a160a65c673acb0722ee35871a2fbcadce09c6cd6f3fdd0be1680bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des anomalies ";
        
        $__internal_14607ce17a160a65c673acb0722ee35871a2fbcadce09c6cd6f3fdd0be1680bc->leave($__internal_14607ce17a160a65c673acb0722ee35871a2fbcadce09c6cd6f3fdd0be1680bc_prof);

        
        $__internal_cd4e7412da49003f1bf393572ba76a5d90c98c13bb92df7ee4e77bd08b8eea2f->leave($__internal_cd4e7412da49003f1bf393572ba76a5d90c98c13bb92df7ee4e77bd08b8eea2f_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d14058b38d8f329f252ed406213a35e055f505a1989a1c3dd83f1e795c82d75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d14058b38d8f329f252ed406213a35e055f505a1989a1c3dd83f1e795c82d75->enter($__internal_1d14058b38d8f329f252ed406213a35e055f505a1989a1c3dd83f1e795c82d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_74653ec2aed5f49b9546923a69da92601bfef70d6bc65bde2599d5dcce67d600 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74653ec2aed5f49b9546923a69da92601bfef70d6bc65bde2599d5dcce67d600->enter($__internal_74653ec2aed5f49b9546923a69da92601bfef70d6bc65bde2599d5dcce67d600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("anomalie_new");
        echo "\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer une anomalie
                        </button>
                    </a>
                </div>

                <form action=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("anomalie_delete_group");
        echo "\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-anomalie\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Libellé</th>
                                <th>Code</th>
                                <th>Type</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["anomalies"] ?? $this->getContext($context, "anomalies")));
        foreach ($context['_seq'] as $context["_key"] => $context["anomalie"]) {
            // line 59
            echo "                                <tr>
                                    <td>
                                        <input type=\"checkbox\" value=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["anomalie"], "id", array()), "html", null, true);
            echo "\" name=\"delete[]\" />
                                    </td>
                                    <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["anomalie"], "anmlLibelle", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["anomalie"], "anmlCode", array()), "html", null, true);
            echo "</td>
                                    <td>
                                        ";
            // line 66
            if ( !(null === $this->getAttribute($context["anomalie"], "ctAnomalieType", array()))) {
                // line 67
                echo "                                            ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["anomalie"], "ctAnomalieType", array()), "atpLibelle", array()), "html", null, true);
                echo "
                                        ";
            }
            // line 69
            echo "                                    </td>
                                    <td>
                                        <a class=\"btn btn-primary\" title=\"Modifier\"
                                           href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("anomalie_edit", array("id" => $this->getAttribute($context["anomalie"], "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-edit\"></i>
                                        </a>
                                        <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                           href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("anomalie_delete", array("id" => $this->getAttribute($context["anomalie"], "id", array()))), "html", null, true);
            echo "\">
                                            <i class=\"fa fa-trash\"></i>
                                        </a>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['anomalie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "                            </tbody>
                        </table>

                        ";
        // line 86
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
        
        $__internal_74653ec2aed5f49b9546923a69da92601bfef70d6bc65bde2599d5dcce67d600->leave($__internal_74653ec2aed5f49b9546923a69da92601bfef70d6bc65bde2599d5dcce67d600_prof);

        
        $__internal_1d14058b38d8f329f252ed406213a35e055f505a1989a1c3dd83f1e795c82d75->leave($__internal_1d14058b38d8f329f252ed406213a35e055f505a1989a1c3dd83f1e795c82d75_prof);

    }

    // line 99
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7035932aadb6917fbec3d342e24ba9fefdf0eeff32a4fcc8036f926844c9efc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7035932aadb6917fbec3d342e24ba9fefdf0eeff32a4fcc8036f926844c9efc8->enter($__internal_7035932aadb6917fbec3d342e24ba9fefdf0eeff32a4fcc8036f926844c9efc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7703a140ed18400dbcbe21372a120b72db684278ede982e88c8f33de994851a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7703a140ed18400dbcbe21372a120b72db684278ede982e88c8f33de994851a6->enter($__internal_7703a140ed18400dbcbe21372a120b72db684278ede982e88c8f33de994851a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 100
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-anomalie').DataTable(
            {
                \"order\": [[ 0, \"desc\" ]],
                \"bProcessing\": true,
                \"bFilter\": true,
                \"oLanguage\": {
                    \"sZeroRecords\": \"Aucun enregistrement correspondant trouvé\",
                    \"sInfoFiltered\":   \"(filtré à partir de _MAX_ entrées)\",
                    \"sInfoEmpty\":      \"afficher de 0 à 0 sur 0 entrées\",
                    \"sProcessing\": \"Traitement...\",
                    \"oPaginate\": {
                        \"sPrevious\": \"Précédente\", // This is the link to the previous page
                        \"sNext\": \"Suivante\", // This is the link to the next page
                    },
                    \"sSearch\": \"Filtrer: \",
                    \"sLengthMenu\": \"Afficher _MENU_ enregistrement par page\",
                    \"sEmptyTable\": \"Aucune anomalie trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });
    </script>
";
        
        $__internal_7703a140ed18400dbcbe21372a120b72db684278ede982e88c8f33de994851a6->leave($__internal_7703a140ed18400dbcbe21372a120b72db684278ede982e88c8f33de994851a6_prof);

        
        $__internal_7035932aadb6917fbec3d342e24ba9fefdf0eeff32a4fcc8036f926844c9efc8->leave($__internal_7035932aadb6917fbec3d342e24ba9fefdf0eeff32a4fcc8036f926844c9efc8_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtAnomalie:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 100,  252 => 99,  231 => 86,  226 => 82,  214 => 76,  207 => 72,  202 => 69,  196 => 67,  194 => 66,  189 => 64,  185 => 63,  180 => 61,  176 => 59,  172 => 58,  156 => 45,  145 => 37,  142 => 36,  130 => 25,  121 => 22,  116 => 21,  112 => 20,  109 => 19,  100 => 16,  97 => 15,  92 => 14,  83 => 11,  80 => 10,  75 => 9,  66 => 8,  47 => 3,  37 => 1,  35 => 6,  33 => 5,  11 => 1,);
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

{% block title %}{{ parent() }} Liste des anomalies {% endblock %}

{% set menu_anomalie      = true %}
{% set menu_anomalie_list = true %}

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
                    <a href=\"{{ path('anomalie_new') }}\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer une anomalie
                        </button>
                    </a>
                </div>

                <form action=\"{{ path('anomalie_delete_group') }}\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-anomalie\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Libellé</th>
                                <th>Code</th>
                                <th>Type</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for anomalie in anomalies %}
                                <tr>
                                    <td>
                                        <input type=\"checkbox\" value=\"{{ anomalie.id }}\" name=\"delete[]\" />
                                    </td>
                                    <td>{{ anomalie.anmlLibelle }}</td>
                                    <td>{{ anomalie.anmlCode }}</td>
                                    <td>
                                        {% if(anomalie.ctAnomalieType is not null) %}
                                            {{ anomalie.ctAnomalieType.atpLibelle }}
                                        {% endif %}
                                    </td>
                                    <td>
                                        <a class=\"btn btn-primary\" title=\"Modifier\"
                                           href=\"{{ path('anomalie_edit', { 'id': anomalie.id }) }}\">
                                            <i class=\"fa fa-edit\"></i>
                                        </a>
                                        <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                           href=\"{{ path('anomalie_delete', { 'id': anomalie.id }) }}\">
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
            \$('#list-anomalie').DataTable(
            {
                \"order\": [[ 0, \"desc\" ]],
                \"bProcessing\": true,
                \"bFilter\": true,
                \"oLanguage\": {
                    \"sZeroRecords\": \"Aucun enregistrement correspondant trouvé\",
                    \"sInfoFiltered\":   \"(filtré à partir de _MAX_ entrées)\",
                    \"sInfoEmpty\":      \"afficher de 0 à 0 sur 0 entrées\",
                    \"sProcessing\": \"Traitement...\",
                    \"oPaginate\": {
                        \"sPrevious\": \"Précédente\", // This is the link to the previous page
                        \"sNext\": \"Suivante\", // This is the link to the next page
                    },
                    \"sSearch\": \"Filtrer: \",
                    \"sLengthMenu\": \"Afficher _MENU_ enregistrement par page\",
                    \"sEmptyTable\": \"Aucune anomalie trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });
    </script>
{% endblock %}
", "AdminBundle:CtAnomalie:index.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtAnomalie/index.html.twig");
    }
}
