<?php

/* AdminBundle:CtCentre:index.html.twig */
class __TwigTemplate_2216f086b93ca27c2e4bc1b78c93f679766382b3734aa55b0078169785938cb4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtCentre:index.html.twig", 1);
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
        $__internal_b23dd727ff27c4cc7710815c2f2b617d2b0388e29cbc540dbf2ae81713632034 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b23dd727ff27c4cc7710815c2f2b617d2b0388e29cbc540dbf2ae81713632034->enter($__internal_b23dd727ff27c4cc7710815c2f2b617d2b0388e29cbc540dbf2ae81713632034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtCentre:index.html.twig"));

        $__internal_77fee5abdb9e6bf52b62a010af02de87779a8371a0dae50069bb333bf2c5ba27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77fee5abdb9e6bf52b62a010af02de87779a8371a0dae50069bb333bf2c5ba27->enter($__internal_77fee5abdb9e6bf52b62a010af02de87779a8371a0dae50069bb333bf2c5ba27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtCentre:index.html.twig"));

        // line 5
        $context["menu_centre"] = true;
        // line 6
        $context["menu_centre_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b23dd727ff27c4cc7710815c2f2b617d2b0388e29cbc540dbf2ae81713632034->leave($__internal_b23dd727ff27c4cc7710815c2f2b617d2b0388e29cbc540dbf2ae81713632034_prof);

        
        $__internal_77fee5abdb9e6bf52b62a010af02de87779a8371a0dae50069bb333bf2c5ba27->leave($__internal_77fee5abdb9e6bf52b62a010af02de87779a8371a0dae50069bb333bf2c5ba27_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b1bbdd838d7574483b3d7d5df4baeff731a660aec3b926799c311b7548ee8627 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1bbdd838d7574483b3d7d5df4baeff731a660aec3b926799c311b7548ee8627->enter($__internal_b1bbdd838d7574483b3d7d5df4baeff731a660aec3b926799c311b7548ee8627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fcf9e3d69bc91ac46d6687b4fd1ac8c607145ff2a53ac845cf0e352c851879ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcf9e3d69bc91ac46d6687b4fd1ac8c607145ff2a53ac845cf0e352c851879ee->enter($__internal_fcf9e3d69bc91ac46d6687b4fd1ac8c607145ff2a53ac845cf0e352c851879ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des centres ";
        
        $__internal_fcf9e3d69bc91ac46d6687b4fd1ac8c607145ff2a53ac845cf0e352c851879ee->leave($__internal_fcf9e3d69bc91ac46d6687b4fd1ac8c607145ff2a53ac845cf0e352c851879ee_prof);

        
        $__internal_b1bbdd838d7574483b3d7d5df4baeff731a660aec3b926799c311b7548ee8627->leave($__internal_b1bbdd838d7574483b3d7d5df4baeff731a660aec3b926799c311b7548ee8627_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_c53d868984dd5c3107cb1ea5eb2644a77bca36ec915e96986ba9037c20a6485b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c53d868984dd5c3107cb1ea5eb2644a77bca36ec915e96986ba9037c20a6485b->enter($__internal_c53d868984dd5c3107cb1ea5eb2644a77bca36ec915e96986ba9037c20a6485b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4d8951480e1b1c1d3d265e27f16807f7c1ca1048987e26a4afafc36124172227 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d8951480e1b1c1d3d265e27f16807f7c1ca1048987e26a4afafc36124172227->enter($__internal_4d8951480e1b1c1d3d265e27f16807f7c1ca1048987e26a4afafc36124172227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("centre_new");
        echo "\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un centre
                        </button>
                    </a>
                </div>
                
                <form action=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("centre_delete_group");
        echo "\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-centre\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                                 <tr>
                                     <th></th>
                                     <th>Nom</th>
                                     <th>Code</th>
                                     <th>Province</th>
                                     <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["centres"] ?? $this->getContext($context, "centres")));
        foreach ($context['_seq'] as $context["_key"] => $context["centre"]) {
            // line 59
            echo "                                    <tr>
                                        <td>
                                            <input type=\"checkbox\" value=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["centre"], "id", array()), "html", null, true);
            echo "\" name=\"delete[]\" />
                                        </td>
                                        <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["centre"], "ctrNom", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["centre"], "ctrCode", array()), "html", null, true);
            echo "</td>
                                        <td>
                                            ";
            // line 66
            if ( !(null === $this->getAttribute($context["centre"], "ctProvince", array()))) {
                // line 67
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["centre"], "ctProvince", array()), "prvNom", array()), "html", null, true);
                echo "
                                            ";
            }
            // line 69
            echo "                                        </td>
                                        <td>
                                            <a class=\"btn btn-primary\" title=\"Modifier\"
                                               href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("centre_edit", array("id" => $this->getAttribute($context["centre"], "id", array()))), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-edit\"></i>
                                            </a>
                                            <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                               href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("centre_delete", array("id" => $this->getAttribute($context["centre"], "id", array()))), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-trash\"></i>
                                            </a>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['centre'], $context['_parent'], $context['loop']);
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
        
        $__internal_4d8951480e1b1c1d3d265e27f16807f7c1ca1048987e26a4afafc36124172227->leave($__internal_4d8951480e1b1c1d3d265e27f16807f7c1ca1048987e26a4afafc36124172227_prof);

        
        $__internal_c53d868984dd5c3107cb1ea5eb2644a77bca36ec915e96986ba9037c20a6485b->leave($__internal_c53d868984dd5c3107cb1ea5eb2644a77bca36ec915e96986ba9037c20a6485b_prof);

    }

    // line 99
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6ca63a49d9f9da60a9f9d6cdea1df7c15d50d435c9899c3086b82de5b4a43ab4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ca63a49d9f9da60a9f9d6cdea1df7c15d50d435c9899c3086b82de5b4a43ab4->enter($__internal_6ca63a49d9f9da60a9f9d6cdea1df7c15d50d435c9899c3086b82de5b4a43ab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_00613207b8b995a464154fc20fba39bf67b14959fe8acb0d5b304901f75203ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00613207b8b995a464154fc20fba39bf67b14959fe8acb0d5b304901f75203ce->enter($__internal_00613207b8b995a464154fc20fba39bf67b14959fe8acb0d5b304901f75203ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 100
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-centre').DataTable(
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
                    \"sEmptyTable\": \"Aucune centre trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });            
    </script>
";
        
        $__internal_00613207b8b995a464154fc20fba39bf67b14959fe8acb0d5b304901f75203ce->leave($__internal_00613207b8b995a464154fc20fba39bf67b14959fe8acb0d5b304901f75203ce_prof);

        
        $__internal_6ca63a49d9f9da60a9f9d6cdea1df7c15d50d435c9899c3086b82de5b4a43ab4->leave($__internal_6ca63a49d9f9da60a9f9d6cdea1df7c15d50d435c9899c3086b82de5b4a43ab4_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtCentre:index.html.twig";
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

{% block title %}{{ parent() }} Liste des centres {% endblock %}

{% set menu_centre      = true %}
{% set menu_centre_list = true %}

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
                    <a href=\"{{ path('centre_new') }}\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un centre
                        </button>
                    </a>
                </div>
                
                <form action=\"{{ path('centre_delete_group') }}\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-centre\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                                 <tr>
                                     <th></th>
                                     <th>Nom</th>
                                     <th>Code</th>
                                     <th>Province</th>
                                     <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for centre in centres %}
                                    <tr>
                                        <td>
                                            <input type=\"checkbox\" value=\"{{ centre.id }}\" name=\"delete[]\" />
                                        </td>
                                        <td>{{ centre.ctrNom }}</td>
                                        <td>{{ centre.ctrCode }}</td>
                                        <td>
                                            {% if(centre.ctProvince is not null) %}
                                                {{ centre.ctProvince.prvNom }}
                                            {% endif %}
                                        </td>
                                        <td>
                                            <a class=\"btn btn-primary\" title=\"Modifier\"
                                               href=\"{{ path('centre_edit', { 'id': centre.id }) }}\">
                                                <i class=\"fa fa-edit\"></i>
                                            </a>
                                            <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                               href=\"{{ path('centre_delete', { 'id': centre.id }) }}\">
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
            \$('#list-centre').DataTable(
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
                    \"sEmptyTable\": \"Aucune centre trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });            
    </script>
{% endblock %}
", "AdminBundle:CtCentre:index.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtCentre/index.html.twig");
    }
}
