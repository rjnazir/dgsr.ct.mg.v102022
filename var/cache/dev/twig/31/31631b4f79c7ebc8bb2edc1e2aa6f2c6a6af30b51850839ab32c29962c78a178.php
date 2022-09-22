<?php

/* AdminBundle:CtVisite:index.html.twig */
class __TwigTemplate_d9bcda74268f1295070f54627d5a7fe77fc539ee54a7d81fc4fc12c2e7f61766 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtVisite:index.html.twig", 1);
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
        $__internal_b7800f08662871b56d80a841062493a5d0d36bf9ed039424fe0b8f7480e164f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7800f08662871b56d80a841062493a5d0d36bf9ed039424fe0b8f7480e164f5->enter($__internal_b7800f08662871b56d80a841062493a5d0d36bf9ed039424fe0b8f7480e164f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtVisite:index.html.twig"));

        $__internal_a6db19cb63269ab8520d0b276471764656ae3bbc2ef855ad6e69e268449e9e5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6db19cb63269ab8520d0b276471764656ae3bbc2ef855ad6e69e268449e9e5d->enter($__internal_a6db19cb63269ab8520d0b276471764656ae3bbc2ef855ad6e69e268449e9e5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtVisite:index.html.twig"));

        // line 5
        $context["menu_visite"] = true;
        // line 6
        $context["menu_visite_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7800f08662871b56d80a841062493a5d0d36bf9ed039424fe0b8f7480e164f5->leave($__internal_b7800f08662871b56d80a841062493a5d0d36bf9ed039424fe0b8f7480e164f5_prof);

        
        $__internal_a6db19cb63269ab8520d0b276471764656ae3bbc2ef855ad6e69e268449e9e5d->leave($__internal_a6db19cb63269ab8520d0b276471764656ae3bbc2ef855ad6e69e268449e9e5d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dd34ec741ff50be8dce518123775d89c52916cd5ea3a652e82df0e4780d4fb85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd34ec741ff50be8dce518123775d89c52916cd5ea3a652e82df0e4780d4fb85->enter($__internal_dd34ec741ff50be8dce518123775d89c52916cd5ea3a652e82df0e4780d4fb85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e8c314f0b1fe4d543c2c895b39978e334c9c6e4f4f4fa777723af218d21207b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8c314f0b1fe4d543c2c895b39978e334c9c6e4f4f4fa777723af218d21207b0->enter($__internal_e8c314f0b1fe4d543c2c895b39978e334c9c6e4f4f4fa777723af218d21207b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des visites ";
        
        $__internal_e8c314f0b1fe4d543c2c895b39978e334c9c6e4f4f4fa777723af218d21207b0->leave($__internal_e8c314f0b1fe4d543c2c895b39978e334c9c6e4f4f4fa777723af218d21207b0_prof);

        
        $__internal_dd34ec741ff50be8dce518123775d89c52916cd5ea3a652e82df0e4780d4fb85->leave($__internal_dd34ec741ff50be8dce518123775d89c52916cd5ea3a652e82df0e4780d4fb85_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_17987d95c6f7e3052d6898af82527a822999828532e19124fa2ea08d425d3f00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17987d95c6f7e3052d6898af82527a822999828532e19124fa2ea08d425d3f00->enter($__internal_17987d95c6f7e3052d6898af82527a822999828532e19124fa2ea08d425d3f00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1822d99b0702ab58eba2563cc8da6d2a03535a40659230a1fbb4024f144d2f62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1822d99b0702ab58eba2563cc8da6d2a03535a40659230a1fbb4024f144d2f62->enter($__internal_1822d99b0702ab58eba2563cc8da6d2a03535a40659230a1fbb4024f144d2f62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_new");
        echo "\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un visite technique
                        </button>
                    </a>
                </div>
                
                <form action=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_delete_group");
        echo "\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-visite\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                                 <tr>
                                     <th></th>
                                     <th>Numéro immatriculation carte grise</th>
                                     <th>Date de création</th>
                                     <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["visites"] ?? $this->getContext($context, "visites")));
        foreach ($context['_seq'] as $context["_key"] => $context["visite"]) {
            // line 58
            echo "                                    <tr>
                                        <td>
                                            <input type=\"checkbox\" value=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["visite"], "id", array()), "html", null, true);
            echo "\" name=\"delete[]\" />
                                        </td>
                                        <td>
                                            ";
            // line 63
            if ($this->getAttribute($context["visite"], "ctCarteGrise", array())) {
                // line 64
                echo "                                                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["visite"], "ctCarteGrise", array()), "cgImmatriculation", array()), "html", null, true);
                echo "
                                            ";
            }
            // line 66
            echo "                                        </td>
                                        <td>";
            // line 67
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["visite"], "vstCreated", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                                        <td>
                                            <a class=\"btn btn-primary\" title=\"Modifier\"
                                               href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_edit", array("id" => $this->getAttribute($context["visite"], "id", array()))), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-edit\"></i>
                                            </a>
                                            <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                               href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visite_delete", array("id" => $this->getAttribute($context["visite"], "id", array()))), "html", null, true);
            echo "\">
                                                <i class=\"fa fa-trash\"></i>
                                            </a>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['visite'], $context['_parent'], $context['loop']);
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
        
        $__internal_1822d99b0702ab58eba2563cc8da6d2a03535a40659230a1fbb4024f144d2f62->leave($__internal_1822d99b0702ab58eba2563cc8da6d2a03535a40659230a1fbb4024f144d2f62_prof);

        
        $__internal_17987d95c6f7e3052d6898af82527a822999828532e19124fa2ea08d425d3f00->leave($__internal_17987d95c6f7e3052d6898af82527a822999828532e19124fa2ea08d425d3f00_prof);

    }

    // line 97
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7bce0a2a542b364dca8056f132199b323883235c6ccd910ec43fbc03831d5ef0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bce0a2a542b364dca8056f132199b323883235c6ccd910ec43fbc03831d5ef0->enter($__internal_7bce0a2a542b364dca8056f132199b323883235c6ccd910ec43fbc03831d5ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_439531820947d77819ba203a010bc0d7173a70f61826fc3fe2de5bd840adb891 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_439531820947d77819ba203a010bc0d7173a70f61826fc3fe2de5bd840adb891->enter($__internal_439531820947d77819ba203a010bc0d7173a70f61826fc3fe2de5bd840adb891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 98
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-visite').DataTable(
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
                    \"sEmptyTable\": \"Aucune visite trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });            
    </script>
";
        
        $__internal_439531820947d77819ba203a010bc0d7173a70f61826fc3fe2de5bd840adb891->leave($__internal_439531820947d77819ba203a010bc0d7173a70f61826fc3fe2de5bd840adb891_prof);

        
        $__internal_7bce0a2a542b364dca8056f132199b323883235c6ccd910ec43fbc03831d5ef0->leave($__internal_7bce0a2a542b364dca8056f132199b323883235c6ccd910ec43fbc03831d5ef0_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtVisite:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 98,  247 => 97,  226 => 84,  221 => 80,  209 => 74,  202 => 70,  196 => 67,  193 => 66,  187 => 64,  185 => 63,  179 => 60,  175 => 58,  171 => 57,  156 => 45,  145 => 37,  142 => 36,  130 => 25,  121 => 22,  116 => 21,  112 => 20,  109 => 19,  100 => 16,  97 => 15,  92 => 14,  83 => 11,  80 => 10,  75 => 9,  66 => 8,  47 => 3,  37 => 1,  35 => 6,  33 => 5,  11 => 1,);
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

{% block title %}{{ parent() }} Liste des visites {% endblock %}

{% set menu_visite      = true %}
{% set menu_visite_list = true %}

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
                    <a href=\"{{ path('visite_new') }}\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un visite technique
                        </button>
                    </a>
                </div>
                
                <form action=\"{{ path('visite_delete_group') }}\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-visite\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                                 <tr>
                                     <th></th>
                                     <th>Numéro immatriculation carte grise</th>
                                     <th>Date de création</th>
                                     <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for visite in visites %}
                                    <tr>
                                        <td>
                                            <input type=\"checkbox\" value=\"{{ visite.id }}\" name=\"delete[]\" />
                                        </td>
                                        <td>
                                            {% if visite.ctCarteGrise %}
                                                {{ visite.ctCarteGrise.cgImmatriculation }}
                                            {% endif %}
                                        </td>
                                        <td>{{ visite.vstCreated|date('d/m/Y') }}</td>
                                        <td>
                                            <a class=\"btn btn-primary\" title=\"Modifier\"
                                               href=\"{{ path('visite_edit', { 'id': visite.id }) }}\">
                                                <i class=\"fa fa-edit\"></i>
                                            </a>
                                            <a class=\"btn btn-danger remove-elt\" title=\"Supprimer\"
                                               href=\"{{ path('visite_delete', { 'id': visite.id }) }}\">
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
            \$('#list-visite').DataTable(
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
                    \"sEmptyTable\": \"Aucune visite trouvée\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });            
    </script>
{% endblock %}
", "AdminBundle:CtVisite:index.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtVisite/index.html.twig");
    }
}
