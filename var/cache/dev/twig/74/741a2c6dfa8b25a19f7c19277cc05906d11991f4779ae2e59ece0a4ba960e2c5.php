<?php

/* AdminBundle:CtRole:index.html.twig */
class __TwigTemplate_a1985934e21309cbcca7c20faaa038f92421572de19ce92d1d4f9865f95543aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtRole:index.html.twig", 1);
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
        $__internal_5ce89e12478169c101fed7ef760ddbcab09a5c14723e40a0d5894bb37519e071 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ce89e12478169c101fed7ef760ddbcab09a5c14723e40a0d5894bb37519e071->enter($__internal_5ce89e12478169c101fed7ef760ddbcab09a5c14723e40a0d5894bb37519e071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtRole:index.html.twig"));

        $__internal_d95ee25321ace7b51d93888f4ddf98cf34e90cfc283b7de09008fb4c609296b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d95ee25321ace7b51d93888f4ddf98cf34e90cfc283b7de09008fb4c609296b2->enter($__internal_d95ee25321ace7b51d93888f4ddf98cf34e90cfc283b7de09008fb4c609296b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtRole:index.html.twig"));

        // line 5
        $context["menu_role"] = true;
        // line 6
        $context["menu_role_list"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ce89e12478169c101fed7ef760ddbcab09a5c14723e40a0d5894bb37519e071->leave($__internal_5ce89e12478169c101fed7ef760ddbcab09a5c14723e40a0d5894bb37519e071_prof);

        
        $__internal_d95ee25321ace7b51d93888f4ddf98cf34e90cfc283b7de09008fb4c609296b2->leave($__internal_d95ee25321ace7b51d93888f4ddf98cf34e90cfc283b7de09008fb4c609296b2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6a0f75896ae794cf81e897a349e3a822691b5361d56e8f033d27e1cbe092e214 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a0f75896ae794cf81e897a349e3a822691b5361d56e8f033d27e1cbe092e214->enter($__internal_6a0f75896ae794cf81e897a349e3a822691b5361d56e8f033d27e1cbe092e214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ad3cc179e820cda8ee160231698a44b56b9092af7b084e93d5b92c7dc85b7abe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad3cc179e820cda8ee160231698a44b56b9092af7b084e93d5b92c7dc85b7abe->enter($__internal_ad3cc179e820cda8ee160231698a44b56b9092af7b084e93d5b92c7dc85b7abe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Liste des carosseries ";
        
        $__internal_ad3cc179e820cda8ee160231698a44b56b9092af7b084e93d5b92c7dc85b7abe->leave($__internal_ad3cc179e820cda8ee160231698a44b56b9092af7b084e93d5b92c7dc85b7abe_prof);

        
        $__internal_6a0f75896ae794cf81e897a349e3a822691b5361d56e8f033d27e1cbe092e214->leave($__internal_6a0f75896ae794cf81e897a349e3a822691b5361d56e8f033d27e1cbe092e214_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_1053e1c3d6258e4322c38e2e485552ae1a74455c6fb0251a4c35264e7627090e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1053e1c3d6258e4322c38e2e485552ae1a74455c6fb0251a4c35264e7627090e->enter($__internal_1053e1c3d6258e4322c38e2e485552ae1a74455c6fb0251a4c35264e7627090e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ce2c34ae3177de88d3c22d57e33648b09835cabde0ede0e6b1641051594a6ab0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce2c34ae3177de88d3c22d57e33648b09835cabde0ede0e6b1641051594a6ab0->enter($__internal_ce2c34ae3177de88d3c22d57e33648b09835cabde0ede0e6b1641051594a6ab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("role_new");
        echo "\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un rôle
                        </button>
                    </a>
                </div>
                
                <form action=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("role_delete_group");
        echo "\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-role\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                                 <tr>
                                     <th>Nom</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["roles"] ?? $this->getContext($context, "roles")));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 55
            echo "                                    <tr>

                                        <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["role"], "roleName", array()), "html", null, true);
            echo "</td>

                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                            </tbody>
                        </table>

                    </div>
                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_ce2c34ae3177de88d3c22d57e33648b09835cabde0ede0e6b1641051594a6ab0->leave($__internal_ce2c34ae3177de88d3c22d57e33648b09835cabde0ede0e6b1641051594a6ab0_prof);

        
        $__internal_1053e1c3d6258e4322c38e2e485552ae1a74455c6fb0251a4c35264e7627090e->leave($__internal_1053e1c3d6258e4322c38e2e485552ae1a74455c6fb0251a4c35264e7627090e_prof);

    }

    // line 71
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ec88e5b4115ad6e7971169b2333c58bee4652f050d266360d6b064d2557b58ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec88e5b4115ad6e7971169b2333c58bee4652f050d266360d6b064d2557b58ee->enter($__internal_ec88e5b4115ad6e7971169b2333c58bee4652f050d266360d6b064d2557b58ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_be9b41e30360a4838daf0d3e783ff6615a72f948f2b004b1186e870f6b5f2491 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be9b41e30360a4838daf0d3e783ff6615a72f948f2b004b1186e870f6b5f2491->enter($__internal_be9b41e30360a4838daf0d3e783ff6615a72f948f2b004b1186e870f6b5f2491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 72
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
    <script type=\"text/javascript\">
        \$(function () {
            \$('#list-role').DataTable(
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
                    \"sEmptyTable\": \"Aucun rôle trouvé\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });            
    </script>
";
        
        $__internal_be9b41e30360a4838daf0d3e783ff6615a72f948f2b004b1186e870f6b5f2491->leave($__internal_be9b41e30360a4838daf0d3e783ff6615a72f948f2b004b1186e870f6b5f2491_prof);

        
        $__internal_ec88e5b4115ad6e7971169b2333c58bee4652f050d266360d6b064d2557b58ee->leave($__internal_ec88e5b4115ad6e7971169b2333c58bee4652f050d266360d6b064d2557b58ee_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtRole:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 72,  204 => 71,  186 => 61,  176 => 57,  172 => 55,  168 => 54,  156 => 45,  145 => 37,  142 => 36,  130 => 25,  121 => 22,  116 => 21,  112 => 20,  109 => 19,  100 => 16,  97 => 15,  92 => 14,  83 => 11,  80 => 10,  75 => 9,  66 => 8,  47 => 3,  37 => 1,  35 => 6,  33 => 5,  11 => 1,);
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

{% block title %}{{ parent() }} Liste des carosseries {% endblock %}

{% set menu_role      = true %}
{% set menu_role_list = true %}

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
                    <a href=\"{{ path('role_new') }}\" onclick=\";\">
                        <button class=\"btn btn-primary\">
                            <i class=\"fa fa-plus\"></i>
                            Créer un rôle
                        </button>
                    </a>
                </div>
                
                <form action=\"{{ path('role_delete_group') }}\" method=\"POST\" class=\"form-search\">
                    <div class=\"box-body table-responsive\">
                        <table id=\"list-role\" class=\"table table-bordered table-striped table-condensed\">
                            <thead>
                                 <tr>
                                     <th>Nom</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for role in roles %}
                                    <tr>

                                        <td>{{ role.roleName }}</td>

                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>

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
            \$('#list-role').DataTable(
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
                    \"sEmptyTable\": \"Aucun rôle trouvé\",
                    \"sInfo\": \"Voir _TOTAL_ de _PAGE_ pour _PAGES_ entrées\",
                },
                \"footerCallback\": function ( row, data, start, end, display ) {
                    \$('.title-count').html(display.length);
                }
            });
        });            
    </script>
{% endblock %}
", "AdminBundle:CtRole:index.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtRole/index.html.twig");
    }
}
