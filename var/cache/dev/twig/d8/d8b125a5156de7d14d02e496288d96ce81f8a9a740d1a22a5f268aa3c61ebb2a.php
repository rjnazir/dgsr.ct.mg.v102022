<?php

/* AdminBundle:CtRole:edit.html.twig */
class __TwigTemplate_f8dde148425a4bdab4ac7c3400d6b37ca001f67ca139d69f9eb83702cfe35e1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backoffice/base_admin.html.twig", "AdminBundle:CtRole:edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backoffice/base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a182d1829f55f3a367f0f8838da69998409c3f73c9990548fef546fb046268b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a182d1829f55f3a367f0f8838da69998409c3f73c9990548fef546fb046268b4->enter($__internal_a182d1829f55f3a367f0f8838da69998409c3f73c9990548fef546fb046268b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtRole:edit.html.twig"));

        $__internal_ca8707809eee2fcfa5323c119d574936877b67f3d5c0c390dba5fce31bcde877 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca8707809eee2fcfa5323c119d574936877b67f3d5c0c390dba5fce31bcde877->enter($__internal_ca8707809eee2fcfa5323c119d574936877b67f3d5c0c390dba5fce31bcde877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:CtRole:edit.html.twig"));

        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["edit_form"] ?? $this->getContext($context, "edit_form")), array(0 => ":form:custom_fields.html.twig"));
        // line 7
        $context["menu_role"] = true;
        // line 8
        $context["menu_role_create"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a182d1829f55f3a367f0f8838da69998409c3f73c9990548fef546fb046268b4->leave($__internal_a182d1829f55f3a367f0f8838da69998409c3f73c9990548fef546fb046268b4_prof);

        
        $__internal_ca8707809eee2fcfa5323c119d574936877b67f3d5c0c390dba5fce31bcde877->leave($__internal_ca8707809eee2fcfa5323c119d574936877b67f3d5c0c390dba5fce31bcde877_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1241bcffe080793d56c3b3bdeb85e7b9bafaa8c25cf2f3ba58248394026bfd1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1241bcffe080793d56c3b3bdeb85e7b9bafaa8c25cf2f3ba58248394026bfd1f->enter($__internal_1241bcffe080793d56c3b3bdeb85e7b9bafaa8c25cf2f3ba58248394026bfd1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7e8ae0ee362c954d29b480557ee01db963a7e70c6ff1ecc15506b11937bd66da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e8ae0ee362c954d29b480557ee01db963a7e70c6ff1ecc15506b11937bd66da->enter($__internal_7e8ae0ee362c954d29b480557ee01db963a7e70c6ff1ecc15506b11937bd66da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " Modification Catégorie ";
        
        $__internal_7e8ae0ee362c954d29b480557ee01db963a7e70c6ff1ecc15506b11937bd66da->leave($__internal_7e8ae0ee362c954d29b480557ee01db963a7e70c6ff1ecc15506b11937bd66da_prof);

        
        $__internal_1241bcffe080793d56c3b3bdeb85e7b9bafaa8c25cf2f3ba58248394026bfd1f->leave($__internal_1241bcffe080793d56c3b3bdeb85e7b9bafaa8c25cf2f3ba58248394026bfd1f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a6e4532716cc49657750f27bad61700eb297feedd6c5a206dee9415f3366f2d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6e4532716cc49657750f27bad61700eb297feedd6c5a206dee9415f3366f2d9->enter($__internal_a6e4532716cc49657750f27bad61700eb297feedd6c5a206dee9415f3366f2d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_58508351d1a6f08cfba38563205a59049242d6c0d4aa808548276f111760c422 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58508351d1a6f08cfba38563205a59049242d6c0d4aa808548276f111760c422->enter($__internal_58508351d1a6f08cfba38563205a59049242d6c0d4aa808548276f111760c422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer un rôle</h3>
                    </div>

                    <div class=\"box-body\">
                        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "roleName", array()), 'row');
        echo "
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_role\"/>
                        <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("role_index");
        echo "\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_58508351d1a6f08cfba38563205a59049242d6c0d4aa808548276f111760c422->leave($__internal_58508351d1a6f08cfba38563205a59049242d6c0d4aa808548276f111760c422_prof);

        
        $__internal_a6e4532716cc49657750f27bad61700eb297feedd6c5a206dee9415f3366f2d9->leave($__internal_a6e4532716cc49657750f27bad61700eb297feedd6c5a206dee9415f3366f2d9_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:CtRole:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 41,  133 => 36,  125 => 31,  116 => 25,  110 => 21,  101 => 18,  98 => 17,  93 => 16,  84 => 13,  81 => 12,  76 => 11,  67 => 10,  48 => 5,  38 => 1,  36 => 8,  34 => 7,  32 => 3,  11 => 1,);
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

{% form_theme edit_form ':form:custom_fields.html.twig' %}

{% block title %}{{ parent() }} Modification Catégorie {% endblock %}

{% set menu_role        = true %}
{% set menu_role_create = true %}

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

    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                {{ form_start(edit_form) }}
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Editer un rôle</h3>
                    </div>

                    <div class=\"box-body\">
                        {{ form_row(edit_form.roleName) }}
                    </div>

                    <div class=\"box-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Modifier\" name=\"update_role\"/>
                        <a href=\"{{ path('role_index') }}\"
                           class=\"btn btn-default pull-left btn-mini-rectif\" >
                            Retour à la liste
                        </a>
                    </div>
                {{ form_end(edit_form) }}
            </div>
        </div>
    </div>
{% endblock %}", "AdminBundle:CtRole:edit.html.twig", "D:\\laragon\\www\\livenexx.ct.mg\\src\\Ct\\BackOffice\\AdminBundle/Resources/views/CtRole/edit.html.twig");
    }
}
